<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trucks>
 */
class TrucksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'license_number' => $this->faker->unique()->bothify('??#####'),
            'model' => $this->faker->word,
            'capacity' => $this->faker->numberBetween(500, 20000),  // in kg
            'exp_kir' => $this->faker->date(),  
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
