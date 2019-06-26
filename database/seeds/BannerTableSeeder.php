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
            'title' => 'Banner 1',
            'description' => 'Banner 1',
            'image' => ENV('APP_URL').'/img/banner-1.jpg',
            'order' => 1,
        ]);

        factory(Banner::class)->create([
            'title' => 'Banner 2',
            'description' => 'Banner 2',
            'image' => ENV('APP_URL').'/img/banner-2.jpg',
            'order' => 1,
        ]);

        factory(Banner::class)->create([
            'title' => 'Banner 3',
            'description' => 'Banner 3',
            'image' => ENV('APP_URL').'/img/banner-3.jpg',
            'order' => 1,
        ]);

        factory(Banner::class)->create([
            'title' => 'Banner 4',
            'description' => 'Banner 4',
            'image' => ENV('APP_URL').'/img/banner-4.jpg',
            'order' => 1,
        ]);
    }
}
