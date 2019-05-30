<?php

namespace App\Http\Middleware;

use App\Repositories\TelephoneRepository;
use Closure;
use Illuminate\Support\Facades\Cache;

class GetTelephones
{
    private $repository;

    public function __construct(TelephoneRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Cache::get('telephones'))
            $this->getTelephones();

        return $next($request);
    }

    private function getTelephones()
    {
        $telephones = $this->repository->findWhere([
            ['active', '=', 1],
        ]);

        Cache::forever('telephones', $telephones);
    }
}
