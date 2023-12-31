<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cekrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // check role using middleware
        if(in_array($request->user()->role,$roles)){
            return $next($request);
        }else{
            return redirect()->back();
        }
       
    }
}
