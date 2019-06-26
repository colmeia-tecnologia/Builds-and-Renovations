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

    public function index($serviceName)
    {
        $service = $this->repository->with(['subservices'])->findWhere([['name', 'like', $serviceName]])->first();

        return view('site.services.index', compact('service'));
    }

    public function form($service, $subservice)
    {
        $servicesAux = $this->repository->findWhere(['active' => 1])->all();
        $serviceAux = $this->repository->findWhere(['name' => $service])->first();
        $subservicesAux = $this->subServiceRepository->findWhere(['service_id' => $serviceAux->id, 'active' => 1])->all();


        $services = array();
        $subservices = array();

        foreach($servicesAux as $s)
            $services[$s->name] = $s->name;
        foreach($subservicesAux as $s)
            $subservices[$s->name] = $s->name;

        return view('site.services.form', compact('services', 'subservices', 'service', 'subservice'));
    }

    public function search($serviceName)
    {
        $service = $this->repository->findWhere(['name' => $serviceName])->first();
        $subservices = $this->subServiceRepository->findWhere(['service_id' => $service->id, 'active' => 1])->all();

        return view('site.forms.subserviceSelect', compact('subservices'));
    }
}
