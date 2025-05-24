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
        Schema::create('clients', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->unsignedBigInteger('advertiser_id')->comment('User ID of advertiser');
            $table->foreign('advertiser_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('domain')->comment('e.g., store1.com');
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
        Schema::dropIfExists('clients');
    }
};
