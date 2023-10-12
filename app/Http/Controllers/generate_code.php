<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;


class generate_code extends Controller
{
    //
    public function generate(Request $req)
    {
//        $attendance = new Attendance();
//        $attendance->courseCode = $req->coursecode;
//        $attendance->className = $req->classname;
//        $attendance->courseName = $req->coursename;
//        $attendance->save();

        $url = 'https://www.youtube.com/watch?v=yzEuC8TWimA';
        $qrCode = QrCode::size(500)->generate($url);
        $user= Auth::User()->name;
        return view('qr-interface', compact('user','qrCode'));
    }
}
