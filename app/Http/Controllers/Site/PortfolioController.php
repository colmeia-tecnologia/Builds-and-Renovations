<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PortfolioRepository;

class PortfolioController extends Controller
{
    private $repository;

    public function __construct(PortfolioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show($id)
    {
        $portfolio = $this->repository->find($id);
        
        return view('site.portfolio.show', compact('portfolio'));
    }
}
