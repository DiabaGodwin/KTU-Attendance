<?php

namespace App\Http\Controllers;

use App\Models\RegisteredCourse;
use Illuminate\Http\Request;

class RegisteredCoursesController extends Controller
{
    public function registerdList(){
        $counter = 1;
        $registeredCourse = RegisteredCourse::all();
        return view('registeredCourses', compact('registeredCourse','counter'));
    }
}
