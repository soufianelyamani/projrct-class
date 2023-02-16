<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\CommandeVente;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommandeVenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = Client::all();

        if ($client->count() == 0) {
            $this->command->info("please create some client");
            return;
        }

        $user = User::all();

        if($user->count() == 0) {
            $this->command->info("please create some User");
            return;
        }

        $nbrCommandeVente = (int)$this->command->ask('How Many of Commande Vente you mant generate ?', 10);

        CommandeVente::factory($nbrCommandeVente)->create();
    }
}
