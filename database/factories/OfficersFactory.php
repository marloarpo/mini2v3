<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Officers>
 */
class OfficersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone_number' => preg_replace('/[^0-9]/', '', trim(fake()->phoneNumber)),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'age' => fake()->numberBetween(30, 50), // Adjust the age range as needed
            'gender' => fake()->randomElement(['Male', 'Female']),
            'address' => fake()->address(),
            'email' => fake()->unique()->safeEmail(),
            'status' => fake()->randomElement(['Active', 'Inactive']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
