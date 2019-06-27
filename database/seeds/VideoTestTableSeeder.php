<?php

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        factory(Video::class)->create([
            'title' => 'Builds and Renovations',
            'description' => 'Builds and Renovations',
            'url' => 'https://www.youtube.com/embed/i9-XM4PiMb4',
            'image' => 'https://img.youtube.com/vi/i9-XM4PiMb4/0.jpg',
        ]);
    }
}
