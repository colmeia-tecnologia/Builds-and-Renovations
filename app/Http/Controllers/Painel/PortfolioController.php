<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Models\PortfolioImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Models\Activity;
use App\Repositories\PortfolioRepository;
use App\Http\Requests\Painel\PortfolioRequest;

class PortfolioController extends Controller
{
    private $repository;

    public function __construct(PortfolioRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::denies('view-portfolios'))
            return redirect('/');

        $portfolios = $this->repository->paginate();

        return view('painel.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::denies('create-portfolios'))
            return redirect('/');

        return view('painel.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {
        if(Gate::denies('create-portfolios'))
            return redirect('/');
            
        $data = $request->all();
        $data['url'] = str_replace('/watch?v=', '/embed/', $data['url']);

        $portfolio = $this->repository->create($data);

        //Grava Log
        Activity::all()->last();

        //Imagens
        if(isset($data['images'])) {
            $imgs = $data['images'];
            $images = array();

            //Imagens
            foreach ($imgs as $img) {
                $imageModel = new PortfolioImage($img);

                $imageModel->portfolio()->associate($portfolio);

                $images[] = $imageModel;
            }

            $portfolio->images()->saveMany($images);

            //Grava Log
            Activity::all()->last();
        }

        Session::flash('message', ['Portifólio salvo com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect('/portfolios');
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
        if(Gate::denies('update-portfolios'))
            return redirect('/');
            
        $portfolio = $this->repository->find($id);

        return view('painel.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequest $request, $id)
    {
        if(Gate::denies('update-portfolios'))
            return redirect('/');
            
        $data = $request->all();
        $data['url'] = str_replace('/watch?v=', '/embed/', $data['url']);

        $portfolio = $this->repository->update($data, $id);

        //Grava Log
        Activity::all()->last();

        //Imagens
        $portfolio->images()->delete();
        if(isset($data['images'])) {
            $imgs = $data['images'];
            $images = array();

            foreach ($imgs as $img) {
                $imageModel = new PortfolioImage($img);

                $imageModel->portfolio()->associate($portfolio);

                $images[] = $imageModel;
            }

            $portfolio->images()->saveMany($images);

            //Grava Log
            Activity::all()->last();
        }

        Session::flash('message', ['Portifólio alterado com sucesso!']); 
        Session::flash('alert-type', 'alert-success'); 

        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Gate::denies('delete-portfolios'))
            return redirect('/');
            
        $this->repository->delete($id);

        //Grava Log
        Activity::all()->last();

        return redirect()->route('portfolios.index');
    }
}
