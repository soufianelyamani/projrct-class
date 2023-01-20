<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'nom' => fake()->name(),
                'prenom' => fake()->name(),
                'telephone' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
                // 'password' => '12345', // password
                'ville' => fake()->name(),
                'adresse' => fake()->name(),
        ];
    }
}
