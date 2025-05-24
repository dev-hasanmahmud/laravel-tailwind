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
        Schema::create('payments', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('user_id')->comment('User receiving or sending money');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('amount', 15, 2)->comment('Amount paid or charged');
            $table->enum('direction', ['incoming', 'outgoing'])->comment('incoming = from advertiser, outgoing = to affiliate');
            $table->enum('method', ['stripe', 'paypal', 'bank_transfer'])->comment('Payment method');
            $table->enum('status', ['pending', 'completed', 'failed'])->comment('Payment status');
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
        Schema::dropIfExists('payments');
    }
};
