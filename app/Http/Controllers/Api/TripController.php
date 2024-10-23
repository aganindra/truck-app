<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\trips;


class TripController extends Controller
{
    public function index(Request $request)
    {
        $trips = Trips::with(['driver', 'truck'])->get();

        $formattedTrips = $trips->map(function ($trip) {
            return [
                'trip_id' => $trip->id,
                'truck' => [
                    'license_plate' => $trip->truck->license_number,
                    'model' => $trip->truck->model,
                ],
                'driver' => [
                    'name' => $trip->driver->name,
                ],
                'start_location' => $trip->start_location,
                'end_location' => $trip->end_location,
                'distance' => $trip->distance,
                'trip_date' => Carbon::parse($trip->trip_date)->format('Y-m-d'),
            ];
        });


        return response()->json($formattedTrips);

    }
    
}
