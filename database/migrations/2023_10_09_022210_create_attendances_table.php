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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('indexNo');
            $table->foreign('indexNo')->references('indexNo')->on('students');
            $table->string('courseCode');
            $table->foreign('courseCode')->references('courseCode')->on('courses');
            $table->string('lecturersId');
            $table->foreign('lecturersId')->references('staffId')->on('lecturers');
            $table->string('className');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
