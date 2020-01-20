<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            if (Auth::user()->user_role == "user")
            {
                    //take the guy to intendended URL, else return to userdashboard
                    return  url()->previous('/dashboard');
            }
            else{
                    //take the guy to intendended URL, else return to admindashboard
                    return  url()->previous('/admin_dashboard');
            }
        }

        return $next($request);
    }
}
