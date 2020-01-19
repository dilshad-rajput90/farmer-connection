<?php

namespace App\Http\Middleware;

use Closure;

class FarmerMiddleware
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
        if (Auth::check() && Auth::user()->profession_id == 4) {

            return $next($request);
        } else if (Auth::check() && Auth::user()->profession_id == 2) {
            return redirect('/consultant_dashboard')->with('message', 'You dont have access to view page');
        } else if (Auth::check() && Auth::user()->profession_id == 3) {
            return redirect('/acadmic_dashboard')->with('message', 'You dont have access to view page');
        } else if (Auth::check() && Auth::user()->profession_id == 1) {
            return redirect('/dashboard')->with('message', 'You dont have access to view page');
        } else if (Auth::check() && Auth::user()->profession_id == 5) {
            return redirect('/general_dashboard')->with('message', 'You dont have access to view page');
        } else {
            return redirect('/custom_login');
        }
    }
}
