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
        Schema::create('affiliate_links', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('affiliate_id')->comment('User ID of affiliate');
            $table->foreign('affiliate_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('campaign_id')->comment("Campaign they're promoting");
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->string('tracking_id')->unique()->comment('Unique ID: AFF123-XYZ098');
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
        Schema::dropIfExists('affiliate_links');
    }
};
