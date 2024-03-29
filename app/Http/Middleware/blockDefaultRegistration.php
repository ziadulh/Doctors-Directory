<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class blockDefaultRegistration
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
        if(!Auth::check()){
            return redirect('login');
            } else {

                if (Auth::user()->userrole == 'admin') {

                    return $next($request);

                } else {
                    return redirect('login');
            }

        }
    }
}
