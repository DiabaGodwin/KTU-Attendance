<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Department;
class FacultyController extends Controller
{
    public function allfaculty(){
        $faculties = Faculty::all();
        $departments = Department::all();
        $courses = course::all();
        $counter = 1;
        return view('facultyAndDepartments', compact('faculties', 'departments','courses','counter'));
    }
}
