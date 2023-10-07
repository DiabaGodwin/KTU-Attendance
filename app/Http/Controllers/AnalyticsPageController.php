<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AnalyticsPageController extends Controller
{
    public function count(){
        $users = User::all(); // Retrieve all users
        return view('analytics', ['users' => $users]);
    }
}
