<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    public function addStudent(Request $req){
        $req->validate([
            'name' => 'required',
            'studentId' => 'required',
            'department' => 'required',
            'faculty' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'address' => 'required',
            'program' => 'required',
            'level' => 'required',

        ]);

        $user = new User();
        $user->name = $req->input('name');
        $user->studentId = $req->input('studentId');
        $user->department = $req->input('department');
        $user->faculty = $req->input('faculty');
        $user->phone = $req->input('phone');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password')); // Hash the password
        $user->address = $req->input('address');
        $user->program = $req->input('program');
        $user->level = $req->input('level');

        $user->role = '1';
        $user->save();
        return redirect('allusers');

//        $user = User::create([
//            'name' => $req->input('name'),
//            'studentId' => $req->input('studentId'),
//            'department' => $req->input('department'),
//            'faculty' => $req->input('faculty'),
//            'phone' => $req->input('phone'),
//            'email' => $req->input('email'),
//            'password' => bcrypt($req->input('password')),
//            'address' => $req->input('address'),
//            'program' => $req->input('program'),
//            'level' => $req->input('level'),
//            'role' => '1',
//        ]);
//        return redirect('allusers');
    }

}
