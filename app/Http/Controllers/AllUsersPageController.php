<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AllUsersPageController extends Controller
{
    public function alluser(){
        $users = User::all();
        $counter = 1;
        return view('allUsers', compact('users', 'counter'));
    }
    public function  search(Request $req){
        $output ="";
        $user = User::where('name','Like', '%' .$req ->search.'%')
            ->orwhere('email','Like', '%'. $req ->search.'%')->get();
        foreach ($user as $users){
            $output.=
                '<tr>
                <td class="text-white">'.$users->name.'</td>
                <td>'.$users->role.'</td>
                <td>'.$users->email.'</td>
                <td>'.'<a href="" class="btn btn-primary" type="submit">Delete Account</a>'.'</td>
                <td>'.'<a href="" class="btn btn-primary" type="submit">EDIT</a>'.'</td>
                </tr>';
        }
        return response($output);
    }
}
