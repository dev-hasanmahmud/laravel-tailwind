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
        Schema::create('traffic_logs', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('affiliate_link_id')->comment('Link used by visitor');
            $table->foreign('affiliate_link_id')->references('id')->on('affiliate_links')->onDelete('cascade');
            $table->unsignedBigInteger('campaign_id')->comment('Campaign tracked');
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->comment('Product where visitor landed');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('ip_address')->comment('Visitor\'s IP address');
            $table->text('user_agent')->comment('Device/Browser information');
            $table->enum('action_type', ['click', 'impression', 'conversion'])->comment('Action performed by the visitor');
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
        Schema::dropIfExists('traffic_logs');
    }
};
