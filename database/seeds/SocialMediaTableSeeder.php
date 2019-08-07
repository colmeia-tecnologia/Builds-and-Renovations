<?php

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SocialMedia::class)->create([
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/Builds-and-Renovations-2160977420606305/',
            //'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>',
            'icon' => env('APP_URL').'/img/facebook.png',
            'active' => 1,
        ]);

        factory(SocialMedia::class)->create([
            'name' => 'Instagram',
            'url' => 'https://www.instagram.com/buildsandrenovations/',
            //'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span>',
            'icon' => env('APP_URL').'/img/instagram.png',
            'active' => 1,
        ]);

        factory(SocialMedia::class)->create([
            'name' => 'Pinterest',
            'url' => null,
            //'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i></span>',
            'icon' => env('APP_URL').'/img/pinterest.png',
            'active' => 0,
        ]);

        factory(SocialMedia::class)->create([
            'name' => 'Twitter',
            'url' => 'https://twitter.com/Reform_web',
            //'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>',
            'icon' => env('APP_URL').'/img/twitter.png',
            'active' => 0,
        ]);

        factory(SocialMedia::class)->create([
            'name' => 'Youtube',
            'url' => null,
            //'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></span>',
            'icon' => env('APP_URL').'/img/youtube.png',
            'active' => 0,
        ]);

        factory(SocialMedia::class)->create([
            'name' => 'Linkedin',
            'url' => null,
            //'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span>',
            'icon' => env('APP_URL').'/img/linkedin.png',
            'active' => 0,
        ]);

        factory(SocialMedia::class)->create([
            'name' => 'Whatsapp',
            'url' => 'https://wa.me/553591380391',
            //'icon' => '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i></span>',
            'icon' => env('APP_URL').'/img/whatsapp.png',
            'active' => 0,
        ]);
    }
}
