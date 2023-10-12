<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Torann\GeoIP\Facades\GeoIP;

class LocationController extends Controller
{
    public function showIp(Request $request): \Illuminate\View\View {
//        $ip = $request->ip();
//        $location = Location::get('192.168.1.1');
////        $location = Location::get($ip);
//        return view('location', compact( 'ip', 'location'));
//        $location = GeoIP::getLocation();
        $arr_ip = geoip()->getLocation(geoip()->getClientIP());
        return view('your-view', ['location' => $arr_ip]);
    }
}
