<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\Attendance;


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

        return redirect('/info');
        // Session::flash('success', 'The data was successfully stored!');
    }

    public function attendanceList(){
        $counter =1;
        $staffId = Auth::user()->staffId;
        $lists = Attendance::where('staffId', $staffId)->get();
//        $lists = Attendance::all();

        return view('attendanceList', compact('lists','counter'));
    }
}
