<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Faculty;
use App\Models\Department;
use App\Models\Program;

class AllUsersPageController extends Controller
{
    public function alluser(){
        $users = User::all();
        $counter = 1;
        $faculties = Faculty::all();
        $departments = Department::all();
        $programs = Program::all();
        return view('allUsers', compact('users', 'counter','faculties','departments', 'programs'));
    }

    public function delete($id)
    {
        $user= User::find($id);
        $user->delete();
        return redirect('allusers')->with('status','Data Deleted Successfully');
    }

    public function edit($id){
        $user= User::find($id);
        return view('editUser', compact('user'));
    }
    public function update(Request $req , $id){
        $user= User::find($id);
        $user->name = $req->input('name');
        $user->faculty = $req->input('faculty');
        $user->department = $req->input('department');
        $user->staffId = $req->input('staffId');
        $user->address = $req->input('address');
        $user->phone = $req->input('phone');
        $user->studentId = $req->input('studentId');
        $user->role = $req->input('role');
        $user->program = $req->input('program');
        $user->level = $req->input('level');
        $user->email = $req->input('email');
        $user->save();
        return redirect('allusers')->with('status',"User updated Successfully");
    }
}
