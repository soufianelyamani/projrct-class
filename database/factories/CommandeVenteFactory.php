<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommandeVente>
 */
class CommandeVenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $client = Client::pluck('id')->toArray();

        return [
            'dateCom' => Carbon::parse(),
            // 'client_id' => Client::factory(),
            'client_id' => fake()->randomElement($client),
        ];
    }
}
