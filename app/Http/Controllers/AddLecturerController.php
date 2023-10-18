<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddLecturerController extends Controller
{
    public function addLecturer(Request $req)
    {
        // Validate the request data
        $req->validate([
            'name' => 'required',
            'staffId' => 'required',
            'department' => 'required',
            'faculty' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'address' => 'required',
        ]);

        // Create a new User instance and set its properties
        $user = new User();
        $user->name = $req->input('name');
        $user->staffId = $req->input('staffId');
        $user->department = $req->input('department');
        $user->faculty = $req->input('faculty');
        $user->phone = $req->input('phone');
        $user->email = $req->input('email');
        $user->password = bcrypt($req->input('password')); // Hash the password
        $user->address = $req->input('address');
        $user->role = '1';

        // Save the user to the database
        $user->save();

        return redirect('allusers');
    }


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
    }
}
