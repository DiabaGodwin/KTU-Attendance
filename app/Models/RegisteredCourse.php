<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredCourse extends Model
{
    use HasFactory;
    protected $table = 'registered_courses';

    // Define the fillable columns
    protected $fillable = ['courseCode', 'studentId', 'staffId'];
}
