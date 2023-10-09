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
        Schema::create('students', function (Blueprint $table) {
            $table->string('indexNo')->unique();
            $table->foreignId('id')->constrained('users')->onDelete('cascade');
            $table->string('department')->notNullable();
            $table->string('faculty')->notNullable();
            $table->string('program')->notNullable();
            $table->string('courses')->notNullable()->unique();
            $table->string('level')->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
