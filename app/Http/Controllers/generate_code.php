<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
// use BaconQrCode\Encoder\QrCode;

class generate_code extends Controller
{
    //

    public function generate()
    {
        // $url = 'https://www.example.com';
        // $qrCode = QrCode::encode($url);
        
        // header('Content-Type: '.$qrCode->getContentType());
        // echo $qrCode->getString();

        return view('qr-interface');

    }
}
