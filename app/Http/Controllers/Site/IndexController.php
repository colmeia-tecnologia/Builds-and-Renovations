<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function __construct()
    {   
        //Cache::flush();
    }

    public function index()
    {
        return view('site.index');
    }
}
