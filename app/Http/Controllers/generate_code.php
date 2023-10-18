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

        $url = 'https://www.codingnepalweb.com/sidebar-menu-in-html-css-javascript-dark-light-mode/';
        $user= Auth::User()->name;
        $qrCode = QrCode::size(500)->generate($url);
        return view('qr-interface', compact('user','qrCode'));
    }
}
