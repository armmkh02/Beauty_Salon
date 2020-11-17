<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckAdminMiddleware
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

        if (Auth::user())
        {
            if (Auth::user()->role == 4098)
            {
                return $next($request);
            }
        }
        else if(empty(Auth::user()))
        {
            return redirect()->route('login');

        }

        return redirect()->route('index');
    }
}
