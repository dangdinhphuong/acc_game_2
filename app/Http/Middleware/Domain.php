<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Domain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {  
        if(strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'http') === 0 && strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'http') !== false){
            if(config('app.protocol').'://'.$_SERVER['HTTP_HOST'] == config('app.doamin')){
                return $next($request);
            }
        }

        abort(503);
    }
}
