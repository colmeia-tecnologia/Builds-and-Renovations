<?php

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use App\Models\PortfolioImage;

class PortfolioTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        factory(Portfolio::class, 6)->create()->each(function ($p) {
            $p->images()->saveMany(factory(PortfolioImage::class, rand(5,10))->make());
        });
    }
}
