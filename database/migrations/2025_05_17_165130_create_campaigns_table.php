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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('advertiser_id')->comment("Reference to users.id (advertiser's ID)");
            $table->foreign('advertiser_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->comment('Campaign name');
            $table->enum('type', ['CPC', 'CPA', 'CPM'])->comment('Campaign type');
            $table->decimal('budget', 15, 2)->comment('Campaign budget');
            $table->date('start_date')->comment('Campaign start date');
            $table->date('end_date')->comment('Campaign end date');
            $table->enum('status', ['active', 'paused', 'completed'])->comment('Campaign status');
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
        Schema::dropIfExists('campaigns');
    }
};
