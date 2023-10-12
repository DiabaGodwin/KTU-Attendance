<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use App\Models\Lecturer;

class LoadLessonsController extends Controller
{
    public function showLessons()
    {
        $lessons = Course::all();
        $lecturers = Lecturer::join('users', 'lecturers.id', '=', 'users.id')
            ->select('lecturers.staffId','lecturers.faculty')
            ->get();
        $user = auth()->user()->id;
        return view('/classes' , compact('lessons','lecturers'));
    }
}
