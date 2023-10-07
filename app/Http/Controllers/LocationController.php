<?php

namespace App\Http\Controllers;

use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function showIp(Request $request){
//        $userip = $request->ip();
        $userip = '66.102.0.0';
        $location = Location::get($userip);

        return $userip;
    }
}
