<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Autenticacion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       /* if(session()->has('login'))
        {
            return response()->make(view('home'));
            //return view('home');
        }
        else
        {
            return response()->make(view('login'));
            //return view('login');
        }*/
           return $next($request);
    }
}
