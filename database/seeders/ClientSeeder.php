<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
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

        $nbrClient = (int)$this->command->ask('How Many of Client you mant generate ?', 10);

        Client::factory($nbrClient)->create();
    }
}
