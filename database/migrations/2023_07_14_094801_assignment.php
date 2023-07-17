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
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->string('assignmentname');
            $table->string('subjectname');
            $table->string('lastdate');
            $table->string('degree');
            $table->string('dept');
            $table->string('year');
            $table->string('date');
            $table->string('regno');
            $table->string('assignfile');
            $table->string('status')->default('not uploaded');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
