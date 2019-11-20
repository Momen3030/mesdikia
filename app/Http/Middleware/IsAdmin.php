<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (Auth::user() &&  Auth::user()->role== 1) {
            return $next($request);
        }elseif (Auth::user() &&  Auth::user()->role == 0){
            return redirect('/add_product');
        }
        else{
            return redirect('/');
        }


    }

}
