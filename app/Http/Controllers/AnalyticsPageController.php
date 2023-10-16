<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\classlist;
use App\Models\attendancelist;
use App\Models\Program;


class AnalyticsPageController extends Controller
{
    public function count(){
        $users = User::all(); // Retrieve all users
//        $students = classlist::all();
//        $attendance = attendancelist::all();
        $programs = Program::all();
        return view('analytics', ['users' => $users],['programs'=> $programs]);
    }


}
