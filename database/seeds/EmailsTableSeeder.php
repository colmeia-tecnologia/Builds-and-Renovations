<?php

use App\Models\Email;
use Illuminate\Database\Seeder;

class EmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Email::class)->create([
            'name' => 'Sales',
            'email' => 'sales@buildsandrenovations.com',
            'active' => 1,
        ]);
    }
}
