<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateDistanceController extends Controller
{
    public function calculateDistance($user1, $user2)
    {
        $earthRadius = 6371; // Earth's radius in kilometers

        $lat1 = deg2rad($user1->latitude);
        $lon1 = deg2rad($user1->longitude);

        $lat2 = deg2rad($user2->latitude);
        $lon2 = deg2rad($user2->longitude);

        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;
        return $distance;
    }

    public function distance($distance){
        $user1 = User::find(1);
        $user2 = User::find(2);

        $distance = calculateDistance($user1, $user2);
        echo "The distance between User 1 and User 2 is: " . $distance . " km";
    }

}
