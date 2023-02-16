<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::all();

        if ($user->count() == 0) {
            $this->command->info("please create some user");
            return;
        }

        $nbrClient = (int)$this->command->ask('How Many of Client you mant generate ?', 10);

        Client::factory($nbrClient)->create();
    }
}
