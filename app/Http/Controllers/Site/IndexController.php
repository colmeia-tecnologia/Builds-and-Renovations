<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Criteria\Site\ActiveCriteria;
use Illuminate\Support\Facades\Cache;
use App\Repositories\BannerRepository;
use App\Repositories\ServiceRepository;

class IndexController extends Controller
{
    private $bannerRepository;
    private $serviceRepository;

    public function __construct(
                                    BannerRepository $bannerRepository,
                                    ServiceRepository $serviceRepository
                                )
    {   
        //Cache::flush();
        $this->bannerRepository = $bannerRepository;
        $this->serviceRepository = $serviceRepository;
    }

    public function index()
    {
        $banners = $this->getBanners();
        $services = $this->getServices();

        return view('site.index', compact ('banners', 'services'));
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

    private function getServices()
    {
        if(!Cache::has('services')) {
            $services = $this
                        ->serviceRepository
                        ->pushCriteria(new ActiveCriteria())
                        ->all();

            $expiresAt = Carbon::now()->addDay();

            Cache::add('services', $services, $expiresAt);

            return $services;
        }

        return Cache::get('services');
    }
}
