<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class HomeMiddleware
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

        if(Auth::user()->role==1){
            return $next($request);
        }else{
            abort(403);
        }
    }
}
