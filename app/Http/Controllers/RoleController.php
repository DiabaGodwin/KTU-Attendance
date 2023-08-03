<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function roles(){
        $role= Auth::user()->role;
        if($role =='1'){
            return view('personal-info');
        }
        else{
            return view('analytics');
        }

    }
}
