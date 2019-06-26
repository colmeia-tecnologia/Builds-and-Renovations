<?php

use App\Models\Telephone;
use Illuminate\Database\Seeder;

class TelephonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Telephone::class)->create([
            'name' => 'Telephone',
            'telephone' => '+1 (407) 730-1133',
            'whatsapp' => 1,
            'active' => 1,
        ]);
    }
}
