<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trips;
use App\Models\trucks;
use App\Models\drivers;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
       
        $totalTripsToday = Trips::whereDate('trip_date', Carbon::today())->count();

       
        $trucksExpiringKir = Trucks::where('exp_kir', '<=', Carbon::now()->addDays(30))->count();

        $driversExpiringSim = Drivers::where('exp_sim', '<=', Carbon::now()->addDays(30))->count();

   
        return view('dashboard.index', compact('totalTripsToday', 'trucksExpiringKir', 'driversExpiringSim'));
    }
}
