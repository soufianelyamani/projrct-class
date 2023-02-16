<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CommandeVente;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        if ($this->command->confirm('Do you want to refresh the database ?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('database was refresh');
            $this->command->info('Now it will be done seeds');
        }

        $this->call([
            ClientSeeder::class,
            CommandeVenteSeeder::class,
            LigneCommandeVenteSeeder::class
            // UserSeeder::class
        ]);
    }
}
