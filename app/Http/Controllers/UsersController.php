<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function search(Request $req){
        $column = $req->input('column');
        $value = $req->input('value');

        $req->validate([
            'column'=>'required|in:name,staffId,studentId,email',
            'value'=>'required',
        ]);

        $users = User::where($column, 'like', '%'.$value. '%')->get();
        return view('allusers', ['users' => $users]);

    }
}
