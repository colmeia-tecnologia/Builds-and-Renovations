<?php

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Banner::class)->create([
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/Builds-and-Renovations-2160977420606305/',
            'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>',
            'active' => 1,
        ]);
    }
}
