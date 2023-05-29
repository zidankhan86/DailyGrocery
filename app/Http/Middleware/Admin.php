<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        if(auth()->user() && auth()->user()->role == 'admin')//Jodi user authenticate hoy &&(Ebong)
                                                            //jodi role == 'admin'(role e admin name kisu thake)
                                                            //taile admin valid user , otherwise go to next page
        {

            return $next($request);
        }


        return redirect()->route('login');
    }

}
