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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('client_id')->comment('Points to the domain/client');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->string('name')->comment('Product name');
            $table->string('slug')->unique()->comment("For use in URL, e.g., 'blue-tshirt'");
            $table->text('product_url')->comment('Final redirect URL');
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
        Schema::dropIfExists('products');
    }
};
