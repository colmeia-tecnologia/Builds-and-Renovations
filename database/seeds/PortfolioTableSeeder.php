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
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=25; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 1,
                'image' => env('APP_URL').'/img/portfolio1-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 2',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=13; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 2,
                'image' => env('APP_URL').'/img/portfolio2-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 3',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=19; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 3,
                'image' => env('APP_URL').'/img/portfolio3-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 4',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=9; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 4,
                'image' => env('APP_URL').'/img/portfolio4-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 5',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=3; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 5,
                'image' => env('APP_URL').'/img/portfolio5-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 6',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=11; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 6,
                'image' => env('APP_URL').'/img/portfolio6-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 7',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=8; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 7,
                'image' => env('APP_URL').'/img/portfolio7-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 8',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=15; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 8,
                'image' => env('APP_URL').'/img/portfolio8-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 9',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=7; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 9,
                'image' => env('APP_URL').'/img/portfolio9-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 10',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=48; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 10,
                'image' => env('APP_URL').'/img/portfolio10-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 11',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=15; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 11,
                'image' => env('APP_URL').'/img/portfolio11-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 12',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=3; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 12,
                'image' => env('APP_URL').'/img/portfolio12-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 13',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=8; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 13,
                'image' => env('APP_URL').'/img/portfolio13-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 14',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=18; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 14,
                'image' => env('APP_URL').'/img/portfolio14-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 15',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=5; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 15,
                'image' => env('APP_URL').'/img/portfolio15-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 16',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=6; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 16,
                'image' => env('APP_URL').'/img/portfolio16-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 17',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=5; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 17,
                'image' => env('APP_URL').'/img/portfolio17-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 18',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=11; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 18,
                'image' => env('APP_URL').'/img/portfolio18-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }


        factory(Portfolio::class)->create([
            'title' => 'Portfolio 19',
            'text' => '',
            'active' => 1,
            'url' => null,
        ]);
        for($i=1; $i<=9; $i++) {
            $imgCount = str_pad($i, 2, "0", STR_PAD_LEFT);
            factory(PortfolioImage::class)->create([
                'portfolio_id' => 19,
                'image' => env('APP_URL').'/img/portfolio19-'.$imgCount.'.jpg',
                'order' => $i,
            ]);
        }
    }
}
