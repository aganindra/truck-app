<?php

namespace Tests\Feature;
use App\Models\Trips;
use App\Models\Drivers;
use App\Models\Trucks;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TripTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     /**
    * @test
     */
    public function testBestCase(): void
    {
        $truck = Trucks::factory()->create();
        $driver = Drivers::factory()->create();

        // Act: Create a trip
        $trip = Trips::create([
            'truck_id' => $truck->id,
            'driver_id' => $driver->id,
            'start_location' => 'Location A',
            'end_location' => 'Location B',
            'distance' => 100,
            'trip_date' => now(),
        ]);

        // Assert: Ensure the trip was created
        $this->assertDatabaseHas('trips', [
            'id' => $trip->id,
            'truck_id' => $truck->id,
            'driver_id' => $driver->id,
        ]);
    }
     /**
    * @test
     */
    public function testBadCase(): void
    {
        $trip = Trips::create([
            'truck_id' => 9999,
            'driver_id' => Drivers::factory()->create()->id,
            'start_location' => 'Location A',
            'end_location' => 'Location B',
            'distance' => 100,
            'trip_date' => now(),
        ]);

        $this->assertNull($trip, "Trip creation should fail with invalid truck_id");

        // Act and Assert: Try to create a trip with an invalid driver_id
        $trip = Trips::create([
            'truck_id' => Trucks::factory()->create()->id,
            'driver_id' => 9999, // Non-existent driver ID
            'start_location' => 'Location A',
            'end_location' => 'Location B',
            'distance' => 100,
            'trip_date' => now(),
        ]);

        $this->assertNull($trip, "Trip creation should fail with invalid driver_id");
    }
}
