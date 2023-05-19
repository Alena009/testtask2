<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'make' => $this->faker->randomElement(['BMW', 'Volkswagen', 'Jaguar', 'Toyota', 'Tesla']),
            'model' => $this->faker->randomElement(['X1', 'Model X', 'FType', 'CH-R', 'Tiguan']),
            'year' => $this->faker->unique()->numberBetween(2010, 2020),
        ];
    }
}
