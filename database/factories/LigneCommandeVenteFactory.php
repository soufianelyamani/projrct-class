<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Client;
use App\Models\CommandeVente;
use App\Models\Produit;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LigneCommandeVente>
 */
class LigneCommandeVenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $cmd_vente = CommandeVente::pluck('id')->toArray();
        $produit = Produit::pluck('id')->toArray();


        return [
            'commandeVente_id' => fake()->randomElement($cmd_vente),
            'produit_id' => fake()->randomElement($produit),
        ];
    }
}
