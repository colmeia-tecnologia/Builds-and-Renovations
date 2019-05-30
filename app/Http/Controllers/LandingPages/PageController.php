<?php

namespace App\Http\Controllers\LandingPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\LandingPageRepository;
use App\Http\Controllers\Util\UrlController;

class PageController extends Controller
{
    private $repository;

    public function __construct(LandingPageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($title)
    {
        $title = UrlController::translateFriendlyUrl($title);

        $landingPage = $this->repository->findWhere(['title' => $title])->first();

        return view('landing-pages/index', compact('landingPage'));
    }

    public function thanks($title)
    {
        $title = UrlController::translateFriendlyUrl($title);

        $landingPage = $this->repository->findWhere(['title' => $title])->first();

        return view('landing-pages/thanks', compact('landingPage'));
    }
}
