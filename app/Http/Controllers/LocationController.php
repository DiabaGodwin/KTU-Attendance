<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;  // Import the Location facade

class LocationController extends Controller
{
    public function showIp(Request $request): \Illuminate\View\View {
        $ip = $request->ip();

        // Get the location data
        $location = Location::get($ip);

        return view('location', compact('location', 'ip'));
    }
}
