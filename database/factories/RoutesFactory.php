<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Routes>
 */
class RoutesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'routes' => fake()->randomElement(['Mandarangan Trail', 'Sta.Cruz Trail','Kapatagan Trail','Magpet Trail']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
