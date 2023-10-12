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
        Schema::table('users', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->string('department')->nullable();
            $table->string('program')->nullable();
            $table->string('faculty')->nullable();
            $table->string('studentId')->nullable()->unique();
            $table->string('staffId')->nullable()->unique();
            $table->string('level')->nullable();
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['address', 'department', 'program', 'faculty', 'studentId', 'staffId', 'level', 'phone']);
            });
        });
    }
};
