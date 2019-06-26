<?php

namespace App\Http\Controllers\Site;

use App\Mail\Contact;
use App\Mail\Service;
use App\Models\ContactLead;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Repositories\ServiceRepository;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;
use App\Http\Requests\Site\ServiceRequest;
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


    public function send(ServiceRequest $request)
    {
        try
        {
            $data = $request->all();
            
            ContactLead::insertIgnore($data);

            //Grava Log
            Activity::all()->last();

            Mail::to(env('MAIL_FORM_TO'))->send(new Service($data));

            Session::flash('status_mail', true);
        }
        catch(\Exception $e)
        {
            Session::flash('status_mail', false);
        }

        return redirect()->back();
    }
}
