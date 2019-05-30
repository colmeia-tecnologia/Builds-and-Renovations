<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\SubserviceRequest;
use App\Repositories\ServiceRepository;
use App\Repositories\SubserviceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;

class SubserviceController extends Controller
{
    private $repository;
    private $serviceRepository;

    public function __construct(SubserviceRepository $repository, ServiceRepository $serviceRepository)
    {
        $this->repository = $repository;
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('view-subservices'))
            return redirect('/');

        $subservices = $this->repository->paginate();

        return view('painel.subservices.index', compact('subservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('create-subservices'))
            return redirect('/');

        $services = $this->serviceRepository->comboboxList();

        return view('painel.subservices.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubserviceRequest $request)
    {
        if(Gate::denies('create-subservices'))
            return redirect('/');

        $data = $request->all();

        $this->repository->create($data);

        //Grava Log
        Activity::all()->last();

        Session::flash('message', ['Serviço salvo com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect('/subservices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('update-subservices'))
            return redirect('/');

        $subservice = $this->repository->find($id);
        $services = $this->serviceRepository->comboboxList();

        return view('painel.subservices.edit', compact('subservice', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubserviceRequest $request, $id)
    {
        if(Gate::denies('update-subservices'))
            return redirect('/');

        $data = $request->all();

        $this->repository->update($data, $id);

        //Grava Log
        Activity::all()->last();

        Session::flash('message', ['Serviço alterado com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect()->route('subservices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete-subservices'))
            return redirect('/');

        $this->repository->delete($id);

        //Grava Log
        Activity::all()->last();

        return redirect()->route('subservices.index');
    }
}
