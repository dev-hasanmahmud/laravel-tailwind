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
        // affiliates, advertisers, admins
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('Primary key');
            $table->string('name')->comment('Full name');
            $table->string('email')->unique()->comment('Unique login email');
            $table->enum('role', ['affiliate', 'advertiser', 'admin'])->nullable()->comment('Account role');
            $table->timestamp('email_verified_at')->nullable()->comment('Email verified date');
            $table->string('password')->comment('Hashed password');
            $table->rememberToken()->comment('Remember token');
            $table->integer('created_by')->nullable()->comment('Account created by');
            $table->integer('updated_by')->nullable()->comment('Account updated by');
            $table->timestamp('created_at')->nullable()->comment('Account created date');
            $table->timestamp('updated_at')->nullable()->comment('Account updated date');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
