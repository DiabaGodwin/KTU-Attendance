<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PersonalInfoController extends Controller
{
    public function info(){
        $information = auth()->user();
        $indexNo = Auth::User()->studentId;
        $studentAttends = Attendance::where('studentId', $indexNo)->get();
        return view('personal-info', compact('information', 'studentAttends'));
    }
    public function userName(){
        $name = auth()->user()->name;
        return view('personal-info', compact('name'));
    }

    public function studentAttendance(){
        $indexNo = '04/2020/1645d';
        $studentAttends = Attendance::where('studentId', $indexNo)->get();
        return view('personal-info', compact('studentAttends'));
    }
}
