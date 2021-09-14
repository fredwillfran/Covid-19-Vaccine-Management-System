<?php

namespace App\Http\Middleware;

use Closure;

class IsCheckout
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isCheckout == 1){
            return $next($request);
        }
   
        return redirect()->back()->with("error","You don't have access to checkout.");
    }
}
