<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Criteria\Site\ActiveCriteria;
use Illuminate\Support\Facades\Cache;
use App\Repositories\BannerRepository;

class IndexController extends Controller
{
    private $bannerRepository;

    public function __construct(
                                    BannerRepository $bannerRepository
                                )
    {   
        //Cache::flush();
        $this->bannerRepository = $bannerRepository;
    }

    public function index()
    {
        $banners = $this->getBanners();

        return view('site.index', compact ('banners'));
    }

    private function getBanners()
    {
        if(!Cache::has('banners')) {
            $banners = $this
                        ->bannerRepository
                        ->pushCriteria(new ActiveCriteria())
                        ->all();

            $expiresAt = Carbon::now()->addDay();

            Cache::add('banners', $banners, $expiresAt);

            return $banners;
        }

        return Cache::get('banners');
    }
}
