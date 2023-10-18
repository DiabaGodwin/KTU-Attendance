<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Classlist_controller extends Controller
{
    public function showList(){
       $role = '0';
        $students = User::where('role', $role)->get();
        $counter = 1;
        return view('/classlist', compact('students', 'counter'));
    }
}
