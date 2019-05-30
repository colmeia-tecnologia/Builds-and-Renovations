<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VerifyActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->active)
            return $next($request);
        else
        {
            Auth::logout();

            Session::flash('message', ['Usuário inativo!']); 
            Session::flash('alert-type', 'alert-danger');

            return redirect('/login');
        }
    }
}
