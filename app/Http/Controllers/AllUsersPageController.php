<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Faculty;
use App\Models\Department;

class AllUsersPageController extends Controller
{
    public function alluser(){
        $users = User::all();
        $counter = 1;
        $faculties = Faculty::all();
        $departments = Department::all();
        return view('allUsers', compact('users', 'counter','faculties','departments'));
    }

}
