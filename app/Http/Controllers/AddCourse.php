<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;

class AddCourse extends Controller
{
    //
    public function addCourse(Request $req)
    {
        $course = new course();
        $course->courseName = $req->coursename;
        $course->courseCode = $req->coursecode;
        $course->className  = $req->classname;
        $course->creditHours = $req->credithours;

        $course->save();
        return redirect('/addCourses');
    }



}
