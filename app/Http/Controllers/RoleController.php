<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
//    public function roles(){
//        $role= Auth::User()->role;
//        if($role =='1'){
//            return view('dashboard');
//        }
//        else if($role == '2'){
//            return view('analytics');
//        }
//        else{
//            return view('classes');
//        }
//    }
    public function sideBarRegulator(){
//        $role= Auth::User()->role;
//        return $role;
        $user = Auth::user();
        return view('sidebar', compact('user'));
    }
}
