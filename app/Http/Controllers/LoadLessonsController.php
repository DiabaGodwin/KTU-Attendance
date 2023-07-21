<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class LoadLessonsController extends Controller
{
    public function showLessons()
    {
        $lessons = Course::all();
        return view('/classes' , compact('lessons'));
    }
}
