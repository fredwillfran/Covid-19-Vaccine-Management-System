<?php

namespace App\Http\Middleware;

use Closure;

class IsCheckin
{
    
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isCheckin == 1){
            return $next($request);
        }
   
        return back()->with("error","You don't have access to checkin.");
    }
}
