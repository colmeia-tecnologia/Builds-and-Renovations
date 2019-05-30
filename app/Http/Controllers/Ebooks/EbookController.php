<?php

namespace App\Http\Controllers\Ebooks;

use App\Http\Controllers\Controller;
use App\Repositories\EbookRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EbookController extends Controller
{

    private $ebookRepository;

    public function __construct(EbookRepository $ebookRepository)
    {
        $this->ebookRepository = $ebookRepository;

        $this->getEbooks();
    }

    public function index()
    {
        $ebooks = Cache::get('ebooks');

        return view('ebooks.index', compact('ebooks'));
    }

    private function getEbooks() 
    {
        $ebooks = $this->ebookRepository->findWhere(['active' => 1])->all();

        $expiresAt = Carbon::now()->addMonth();

        Cache::add('ebooks', $ebooks, $expiresAt);
    }
}
