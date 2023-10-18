<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\RegisteredCourse;
use Illuminate\Support\Facades\Auth;


class AddCourse extends Controller
{

    public function registerCourses(Request $req){
        $RegisteredCourse = new course();
        $RegisteredCourse->courseCode = $req->input('courseName');
        $RegisteredCourse->staffId = $req->input('staffId');
        $RegisteredCourse->studentId = $req->input('studentId');
        $RegisteredCourse->save();

//        $registered = RegisteredCourse::join('courses', 'courses.courseCode', '=', 'RegisteredCourses.courseCode')
//            ->select('courses.courseName')
//            ->get();

//        $user = Auth::user();
//
//        // Use the staffId to filter the registered courses
//        $registeredCourses = RegisteredCourse::join('courses', 'courses.courseCode', '=', 'registered_courses.courseCode')
//            ->where('registered_courses.staffId', '=', $user->staffId)
//            ->select('courses.courseName')
//            ->get();
//        $counter = 1;
//        return view('/courses', compact('registeredCourses','counter'));
        return view('/courses');
    }

    public function registeredCourses(){
        $courses = course::all();

        $user = Auth::user();
        if (!$user) {
            // Handle the case when the user is not authenticate
            return redirect()->route('login'); // Adjust the route as needed
        }

        // Use the staffId to filter the registered courses
        $registeredCourses = RegisteredCourse::join('courses', 'courses.courseCode', '=', 'registered_courses.courseCode')
            ->where('registered_courses.staffId', '=', $user->staffId)
            ->select('courses.courseName','registered_courses.courseCode')
            ->get();

        $studentCourses = RegisteredCourse::join('courses', 'courses.courseCode', '=', 'registered_courses.courseCode')
            ->where('registered_courses.studentId', '=', $user->studentId)
            ->select('courses.courseName','registered_courses.courseCode')
            ->get();
        $counter = 1;
        return view('courses', compact('registeredCourses','counter','courses','studentCourses'));
    }


    public function allCourses(){
        $courses = course::all();
        return view('courses', compact('courses'));
    }



}
