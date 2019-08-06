<?php

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class)->create([
            'name' => 'Homes',
        ]);

        factory(Client::class)->create([
            'name' => 'Condos',
        ]);

        factory(Client::class)->create([
            'name' => 'Stores and Offices',
        ]);

        factory(Client::class)->create([
            'name' => 'Hotels',
        ]);

        factory(Client::class)->create([
            'name' => 'Malls',
        ]);

        factory(Client::class)->create([
            'name' => 'Industries',
        ]);

        factory(Client::class)->create([
            'name' => 'Comercial Centers',
        ]);
    }
}
