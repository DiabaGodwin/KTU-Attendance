<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function roles(){
        $role= Auth::User()->role;
        if($role =='1'){
            return view('dashboard');
        }
        else{
            return view('analytics');
        }

    }
}
