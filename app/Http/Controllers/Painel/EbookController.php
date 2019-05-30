<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\EbookRequest;
use App\Repositories\EbookRepository;
use App\Repositories\LandingPageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;

class ebookController extends Controller
{
    private $repository;
    private $landingPageRepository;

    public function __construct(
                                    EbookRepository $repository,
                                    LandingPageRepository $landingPageRepository
                                )
    {
        $this->repository = $repository;
        $this->landingPageRepository = $landingPageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('view-ebooks'))
            return redirect('/');

        $ebooks = $this->repository->paginate();

        return view('painel.ebooks.index', compact('ebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('create-ebooks'))
            return redirect('/');

        $landingPages = $this->landingPageRepository->comboboxList();

        return view('painel.ebooks.create', compact('landingPages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EbookRequest $request)
    {
        if(Gate::denies('create-ebooks'))
            return redirect('/');

        $data = $request->all();

        $this->repository->create($data);

        //Grava Log
        Activity::all()->last();

        Session::flash('message', ['E-book salvo com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect('/ebooks');
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
        if(Gate::denies('update-ebooks'))
            return redirect('/');

        $ebook = $this->repository->find($id);

        $landingPages = $this->landingPageRepository->comboboxList();

        return view('painel.ebooks.edit', compact('ebook', 'landingPages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EbookRequest $request, $id)
    {
        if(Gate::denies('update-ebooks'))
            return redirect('/');

        $data = $request->all();

        $this->repository->update($data, $id);

        //Grava Log
        Activity::all()->last();

        Session::flash('message', ['E-book alterado com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect()->route('ebooks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete-ebooks'))
            return redirect('/');

        $this->repository->delete($id);

        //Grava Log
        Activity::all()->last();

        return redirect()->route('ebooks.index');
    }
}
