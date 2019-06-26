<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ServiceRepository;
use App\Repositories\SubserviceRepository;

class ServiceController extends Controller
{
    private $repository;
    private $subServiceRepository;

    public function __construct(ServiceRepository $repository, SubserviceRepository $subServiceRepository)
    {
        $this->repository = $repository;
        $this->subServiceRepository = $subServiceRepository;
    }

    public function index($service)
    {
        $subservices = $this->subServiceRepository->with('service')->findWhere(['service.name' => $service]);

        return view('site.services.index', compact('services'));
    }
}
