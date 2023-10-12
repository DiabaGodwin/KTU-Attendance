<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseCode');
            $table->string('courseName');
            $table->string('venue');
            $table->string('staffId'); // Change to string
            $table->string('studentId')->nullable(); // Change to string and allow null
            $table->string('department');
            $table->string('faculty');
            $table->integer('creditHours');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('staffId')->references('staffId')->on('users')->onDelete('cascade');
            $table->foreign('studentId')->references('studentId')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
