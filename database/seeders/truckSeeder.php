<?php

namespace Database\Seeders;

use App\Models\trucks;
use Illuminate\Database\Seeder;

class truckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        trucks::create(['license_number' => 'A 123 EFS', 'model' => 'L-300', 'capacity' => 1000, 'exp_kir' => '2025-05-10', 'status' => 'Available']);
        trucks::create(['license_number' => 'S 789 GFS', 'model' => 'Hino 700', 'capacity' => 1200, 'exp_kir' => '2024-03-15', 'status' => 'In Use']);
        trucks::create(['license_number' => 'N 456 ESG', 'model' => 'Scania R620', 'capacity' => 1500, 'exp_kir' => '2026-01-20', 'status' => 'Available']);
    }
}
