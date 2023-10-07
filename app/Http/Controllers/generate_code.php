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
        // $url = 'https://www.example.com';
        // $qrCode = QrCode::encode($url);

        // header('Content-Type: '.$qrCode->getContentType());
        // echo $qrCode->getString()

        $user= Auth::User()->name;
//        return view('qr-interface');
        return view('qr-interface', compact('user'));
    }
}
