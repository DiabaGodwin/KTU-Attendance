<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AllUsersPageController extends Controller
{
    public function alluser(){
        $users = User::all();
        return view('allUsers', compact('users'));
    }
}
