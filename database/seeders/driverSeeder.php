<?php

namespace Database\Seeders;

use App\Models\Drivers;// Ensure this is correct
use Illuminate\Database\Seeder;

class driverSeeder extends Seeder
{
    public function run(): void
    {
        Drivers::create(['name' => 'Henky', 'license_number' => '1234', 'exp_sim' => '2025-12-31', 'experience_years' => 5]);
        Drivers::create(['name' => 'Sutijem', 'license_number' => '89078', 'exp_sim' => '2024-11-30', 'experience_years' => 3]);
        Drivers::create(['name' => 'Kris', 'license_number' => '989898', 'exp_sim' => '2023-10-15', 'experience_years' => 10]);
    }
}
