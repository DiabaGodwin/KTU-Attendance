<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersonalInfoController extends Controller
{
    public function info(){
        $information = auth()->user();
        return view('personal-info', compact('information'));
    }
    public function userName(){
        $name = auth()->user()->name;
        return view('personal-info', compact('name'));
    }
}
