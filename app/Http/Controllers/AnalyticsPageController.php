<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AnalyticsPageController extends Controller
{
    public function count(){
        $count = User::where('role','0')->count();
        return view('analytics', 'count');
    }
}
