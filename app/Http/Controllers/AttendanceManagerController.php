<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class AttendanceManagerController extends Controller
{

    public function studentAttendanceLogs(){
        $indexNo = Auth::User()->studentId;
        $counter =1;
        $studentAttends = Attendance::where('studentId', $indexNo)->get();
//        $studentAttends = Attendance::join('courses','courses.courseCode', '=', 'attendances.courseCode')
//            ->join('users', 'users.studentId', '=','attendances.staffId')
//            ->where('attendances.studentId', '=', $indexNo)
//            ->select('users.name','courses.courseName','attendances.created_at','attendances.venue')
//            ->get();

//        $studentAttends = Attendance::join('courses', 'courses.courseCode', '=', 'attendances.courseCode')
//            ->join('users', 'users.studentId', '=', 'attendances.staffId')
//            ->where('attendances.studentId', '=', $indexNo)
//            ->select('users.name', 'courses.courseName', 'attendances.created_at', 'attendances.venue')
//            ->get();

        return view('studentLogs', compact('studentAttends','counter'));
    }

    public function attendClass(Request $req){
        return view('attendanceform');
    }
}
