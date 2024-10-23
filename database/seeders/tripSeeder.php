<?php

namespace Database\Seeders;

use App\Models\trips;
use Illuminate\Database\Seeder;

class tripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        trips::create(['truck_id' => 1, 'driver_id' => 1, 'start_location' => 'New York', 'end_location' => 'Boston', 'distance' => 215, 'trip_date' => '2023-10-01']);
        trips::create(['truck_id' => 2, 'driver_id' => 2, 'start_location' => 'San Francisco', 'end_location' => 'Los Angeles', 'distance' => 380, 'trip_date' => '2023-10-05']);
        trips::create(['truck_id' => 1, 'driver_id' => 3, 'start_location' => 'Chicago', 'end_location' => 'Detroit', 'distance' => 280, 'trip_date' => '2023-10-10']);
    }
}
