<?php

namespace App\Http\Controllers\Site;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Criteria\Site\ActiveCriteria;
use Illuminate\Support\Facades\Cache;
use App\Repositories\BannerRepository;
use App\Repositories\ClientRepository;
use App\Repositories\ServiceRepository;

class IndexController extends Controller
{
    private $bannerRepository;
    private $serviceRepository;
    private $clientRepository;

    public function __construct(
                                    BannerRepository $bannerRepository,
                                    ServiceRepository $serviceRepository,
                                    ClientRepository $clientRepository
                                )
    {   
        //Cache::flush();
        $this->bannerRepository = $bannerRepository;
        $this->serviceRepository = $serviceRepository;
        $this->clientRepository = $clientRepository;
    }

    public function index()
    {
        $banners = $this->getBanners();
        $services = $this->getServices();
        $clients = $this->getClients();

        return view('site.index', compact ('banners', 'services', 'clients'));
    }

    private function getBanners()
    {
        if(!Cache::has('banners')) {
            $banners = $this
                        ->bannerRepository
                        ->pushCriteria(new ActiveCriteria())
                        ->all();

            $expiresAt = Carbon::now()->addWeek();

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

            $expiresAt = Carbon::now()->addWeek();

            Cache::add('services', $services, $expiresAt);

            return $services;
        }

        return Cache::get('services');
    }

    private function getClients()
    {
        if(!Cache::has('clients')) {
            $clients = $this
                        ->clientRepository
                        ->all();

            $expiresAt = Carbon::now()->addWeek();

            Cache::add('clients', $clients, $expiresAt);

            return $clients;
        }

        return Cache::get('clients');
    }
}
