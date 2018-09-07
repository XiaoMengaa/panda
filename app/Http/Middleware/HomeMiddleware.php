<?php

namespace App\Http\Middleware;

use Closure;

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
        if(\Session::has('id')){
            return $next($request);
        }else{
            return redirect('/home/login')->with('error','您还没有登陆!!!请登陆...');
        }
    }
}
