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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->string('staffId')->unique();
            $table->foreignId('id')->constrained('users')->onDelete('cascade');
            $table->string('department')->notNullable();
            $table->string('faculty')->notNullable();
            $table->string('courses')->notNullable();
            $table->foreign('courses')
                ->references('courseCode')->on('courses')
                ->onUpdate('cascade')  // Optional: You can adjust these if needed
                ->onDelete('cascade');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
