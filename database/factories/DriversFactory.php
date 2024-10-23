<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Drivers>
 */
class DriversFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        
        return [
            'name' => $this->faker->name,
            'license_number' => $this->faker->unique()->bothify('??#####'),
            'exp_sim' => $this->faker->date(),
            'experience_years' => $this->faker->numberBetween(1, 30),
            
        ];
    }
}
