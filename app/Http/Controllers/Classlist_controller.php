<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classlist;


class Classlist_controller extends Controller
{
    //
    public function showList(){
        $lists = Classlist::all();
        return view('/classlist', compact('lists'));
    }
}
