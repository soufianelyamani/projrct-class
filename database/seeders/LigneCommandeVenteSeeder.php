<?php

namespace Database\Seeders;

use App\Models\Produit;
use App\Models\CommandeVente;
use Illuminate\Database\Seeder;
use App\Models\LigneCommandeVente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LigneCommandeVenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cmd_vente = CommandeVente::all();


        if ($cmd_vente->count() == 0) {
            $this->command->info("please create some client");
            return;
        }

        $produit = Produit::all();


        if($produit->count() == 0) {
            $this->command->info("please create some Produit");
            return;
        }

        $nbrCommandeVente = (int)$this->command->ask('How Many of Ligne command you mant generate ?', 10);

        LigneCommandeVente::factory($nbrCommandeVente)->create();
    }
}
