<?php

namespace App\Http\Middleware;

use App\Configure;
use Closure;
class Wzkg
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
        // $wzpz = Configure::all();
        $wzpz = Configure::get()->first();

        if($wzpz->switch==0){
              return $next($request);
          }else{
            return redirect('/home/wzkg');
         }
      
    }
}
