<?php

namespace App\Http\Middleware;

use App\Repositories\EmailRepository;
use Closure;
use Illuminate\Support\Facades\Cache;

class GetEmails
{
    private $repository;

    public function __construct(EmailRepository $repository)
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
        if(!Cache::get('emails'))
            $this->getEmails();

        return $next($request);
    }

    private function getEmails()
    {
        $emails = $this->repository->findWhere([
            ['active', '=', 1],
        ]);

        Cache::forever('emails', $emails);
    }
}
