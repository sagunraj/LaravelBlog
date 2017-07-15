<?php

namespace App\Http\Middleware;

use Closure;

class GuideMiddleware
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
       if(!Auth::check())
        abort(404);

        if(Auth::user()->role==2){
            return $next($request);
        }else{
            abort(403);
        }
        
    }
}
