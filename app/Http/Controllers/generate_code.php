<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class generate_code extends Controller
{
    //
    public function generate(Request $req)
    {
        $url = 'https://www.youtube.com/watch?v=yzEuC8TWimA';
        $qrCode = QrCode::size(500)->generate($url);
        $user= Auth::User()->name;
        return view('qr-interface', compact('user','qrCode'));
    }
}
