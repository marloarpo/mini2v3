<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Municipalities>
 */
class MunicipalitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'municipal' => fake()->randomElement(['Kidapawan', 'Sta.Cruz','Digos','Davao']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
