<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function showIp(Request $request): \Illuminate\View\View {
        $ip = $request->ip();

        return view('location', compact( 'ip'));
    }
}
