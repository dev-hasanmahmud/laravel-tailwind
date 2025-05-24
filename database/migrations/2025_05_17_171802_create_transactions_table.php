<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('user_id')->comment('Affiliate or Advertiser');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('campaign_id')->comment('Campaign related to the transaction');
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->decimal('amount', 15, 2)->comment('Earned or paid amount');
            $table->enum('transaction_type', ['credit', 'debit'])->comment('Type of transaction: credit for affiliates, debit for advertisers');
            $table->enum('status', ['pending', 'completed', 'failed'])->comment('Transaction status');
            $table->integer('created_by')->nullable()->comment('Account created by');
            $table->integer('updated_by')->nullable()->comment('Account updated by');
            $table->timestamp('created_at')->nullable()->comment('Account created date');
            $table->timestamp('updated_at')->nullable()->comment('Account updated date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
