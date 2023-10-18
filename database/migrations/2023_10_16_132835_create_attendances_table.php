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
            $table->string('courseCode');
            $table->string('staffId');
            $table->string('studentId');
            $table->string('venue');
            $table->timestamps();

            $table->foreign('staffId')->references('staffId')->on('users')->onDelete('cascade');
            $table->foreign('studentId')->references('studentId')->on('users')->onDelete('cascade');
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
