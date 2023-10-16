<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Department;
class FacultyController extends Controller
{
    public function allfaculty(){
        $faculties = Faculty::all();
        $departments = Department::all();
        return view('facultyAndDepartments', compact('faculties', 'departments'));
    }
}
