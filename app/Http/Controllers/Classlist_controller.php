<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\classlist;


class Classlist_controller extends Controller
{
    //
    public function showList(){
        $lists = classlist::all();
//        return view('/classlist', compact('lists'));
        return view('/classlist');
    }
}
