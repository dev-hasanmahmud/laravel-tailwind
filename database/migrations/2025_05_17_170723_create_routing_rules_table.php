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
        Schema::create('routing_rules', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('campaign_id')->comment('Campaign being routed');
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->unsignedBigInteger('product_id')->comment('Product to route traffic to');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('weight')->default(1)->comment('Weight or priority (higher = more traffic)');
            $table->enum('status', ['active', 'inactive'])->comment('Routing rule status');
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
        Schema::dropIfExists('routing_rules');
    }
};
