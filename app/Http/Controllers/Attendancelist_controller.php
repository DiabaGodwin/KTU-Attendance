<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\attendancelist;


class attendancelist_controller extends Controller
{
    public function attendclass(Request $request)
    {
        $ip = $request->ip();

        $key = 'form_submit_' . $ip;

        if (Cache::has($key)) {
            // IP already submitted the form today
//            return response()->json(['error' => 'You have already submitted the form today.']);
            return $ip;
        }

        // Store the IP in cache for 24 hours
        Cache::put($key, true, now()->addDay());

        // Process form submission
        $attendancelist = new attendancelist();
        $attendancelist->firstname = $request->firstname;
        $attendancelist->lastname = $request->lastname;
        $attendancelist->indexNumber = $request->index;
        $attendancelist->save();
        return redirect('/info');
        // Session::flash('success', 'The data was successfully stored!');
    }

    public function attendanceList(){
        $lists = attendancelist::all();
        return view('attendanceList', compact('lists'));
    }
}
