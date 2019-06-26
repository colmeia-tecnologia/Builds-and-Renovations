<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ServiceRepository;
use App\Repositories\SubserviceRepository;

class ServiceController extends Controller
{
    private $repository;

    public function __construct(ServiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($serviceName)
    {
        $service = $this->repository->with(['subservices'])->findWhere([['name', 'like', $serviceName]])->first();

        return view('site.services.index', compact('service'));
    }
}
