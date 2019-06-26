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
            'name' => 'Stores and Offices',
        ]);

        factory(Client::class)->create([
            'name' => 'Hotels',
        ]);

        factory(Client::class)->create([
            'name' => 'Shopping Centers',
        ]);

        factory(Client::class)->create([
            'name' => 'Townhouses',
        ]);

        factory(Client::class)->create([
            'name' => 'Industries',
        ]);

        factory(Client::class)->create([
            'name' => 'Comercial Centers',
        ]);
    }
}
