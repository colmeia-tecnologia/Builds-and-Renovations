<?php

namespace App\Http\Middleware;

use App\Repositories\SocialMediaRepository;
use Closure;
use Illuminate\Support\Facades\Cache;

class GetSocialMedias
{
    private $repository;

    public function __construct(SocialMediaRepository $repository)
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
        if(!Cache::get('socialmedias'))
            $this->getSocialMedias();

        return $next($request);
    }

    private function getSocialMedias()
    {
        $socialMedias = $this->repository->findWhere([
            ['active', '=', 1],
            ['url', '<>', null],
        ]);

        Cache::forever('socialmedias', $socialMedias);
    }
}
