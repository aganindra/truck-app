<?php

namespace App\Http\Controllers;

use App\Models\trips;
use App\Models\trucks;
use App\Models\drivers;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $trips = trips::with(['driver', 'truck'])->get();
        return view('trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers = Drivers::all();
        $trucks = Trucks::all();
        return view('trips.create', compact('drivers','trucks'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'truck_id' => 'required|exists:trucks,id',
            'driver_id' => 'required|exists:drivers,id',
            'start_location' => 'required|string|max:255',
            'end_location' => 'required|string|max:255',
            'distance' => 'required|integer',
            'trip_date' => 'required|date',
        ]);

        Trips::create($request->all());
        return redirect()->route('trips.index')->with('success', 'Trip created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trip = Trips::with(['driver', 'truck'])->findOrFail($id);
        return view('trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $trip = Trips::findOrFail($id); // Fetch trip by ID or throw error if not found
        $drivers = Drivers::all();
        $trucks = Trucks::all();

        return view('trips.edit', compact('trip', 'drivers', 'trucks'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $trip = Trips::findOrFail($id);

        $request->validate([
            'truck_id' => 'required|exists:trucks,id',
            'driver_id' => 'required|exists:drivers,id',
            'start_location' => 'required|string|max:255',
            'end_location' => 'required|string|max:255',
            'distance' => 'required|integer',
            'trip_date' => 'required|date',
        ]);
    
        $trip->update($request->all());
        return redirect()->route('trips.index')->with('success', 'Trip updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trip = Trips::findOrFail($id);
        $trip->delete();
    
        return redirect()->route('trips.index')->with('warning', 'Trip deleted successfully.');
    }
}
