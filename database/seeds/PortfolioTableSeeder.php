<?php

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use App\Models\PortfolioImage;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        factory(Portfolio::class)->create([
            'title' => 'Portfolio 1',
            'text' => '',
        ]);
        for($i=1; $i<=25; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 1,
                'image' => env('APP_URL').'/img/portifolio1-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 2',
            'text' => '',
        ]);
        for($i=1; $i<=13; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 2,
                'image' => env('APP_URL').'/img/portifolio2-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 3',
            'text' => '',
        ]);
        for($i=1; $i<=19; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 3,
                'image' => env('APP_URL').'/img/portifolio3-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 4',
            'text' => '',
        ]);
        for($i=1; $i<=9; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 4,
                'image' => env('APP_URL').'/img/portifolio4-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 5',
            'text' => '',
        ]);
        for($i=1; $i<=3; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 5,
                'image' => env('APP_URL').'/img/portifolio5-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 6',
            'text' => '',
        ]);
        for($i=1; $i<=11; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 6,
                'image' => env('APP_URL').'/img/portifolio6-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 7',
            'text' => '',
        ]);
        for($i=1; $i<=8; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 7,
                'image' => env('APP_URL').'/img/portifolio7-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 8',
            'text' => '',
        ]);
        for($i=1; $i<=15; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 8,
                'image' => env('APP_URL').'/img/portifolio8-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 9',
            'text' => '',
        ]);
        for($i=1; $i<=7; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 9,
                'image' => env('APP_URL').'/img/portifolio9-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 10',
            'text' => '',
        ]);
        for($i=1; $i<=48; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 10,
                'image' => env('APP_URL').'/img/portifolio10-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 11',
            'text' => '',
        ]);
        for($i=1; $i<=15; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 11,
                'image' => env('APP_URL').'/img/portifolio11-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 12',
            'text' => '',
        ]);
        for($i=1; $i<=3; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 12,
                'image' => env('APP_URL').'/img/portifolio12-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 13',
            'text' => '',
        ]);
        for($i=1; $i<=8; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 13,
                'image' => env('APP_URL').'/img/portifolio13-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 14',
            'text' => '',
        ]);
        for($i=1; $i<=18; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 14,
                'image' => env('APP_URL').'/img/portifolio14-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 15',
            'text' => '',
        ]);
        for($i=1; $i<=5; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 15,
                'image' => env('APP_URL').'/img/portifolio15-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 16',
            'text' => '',
        ]);
        for($i=1; $i<=6; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 16,
                'image' => env('APP_URL').'/img/portifolio16-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 17',
            'text' => '',
        ]);
        for($i=1; $i<=5; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 17,
                'image' => env('APP_URL').'/img/portifolio17-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 18',
            'text' => '',
        ]);
        for($i=1; $i<=11; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 18,
                'image' => env('APP_URL').'/img/portifolio18-'.$imgCount.'.jpeg',
                'order' => $i,
            ]);
        }
    }
}
