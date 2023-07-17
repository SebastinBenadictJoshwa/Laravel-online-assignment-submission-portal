<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('regno')->unique();
            $table->string('name');
            $table->string('gender');
            $table->string('age');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('degree');
            $table->string('dept');
            $table->string('year');
            $table->string('address');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(Hash::make('12345678'));
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
