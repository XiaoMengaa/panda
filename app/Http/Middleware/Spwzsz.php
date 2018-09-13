<?php

namespace App\Http\Middleware;


use Closure;
use App\Scwzszb;

class Spwzsz
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
         $spwzsz = Scwzszb::get()->first();

        if($spwzsz->switch==0){
              return $next($request);
          }else{
            return redirect('/home/wzkg');
         }
      
    }
    
}
