<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeratorLogin
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
        if (Auth::check()) {
            switch (Auth::user()->role_id) {
                case ('1'):
                    return redirect('admin'); //Si es administrador redirige a ADMIN
                    break;

                case ('2'):
                    return redirect('user'); //Si es un usuario normal redirige a USER
                    break;

                case ('3'):
                    return $next($request); //Si es un docente continua a home
                    break;
            }
        }


        /* if (Auth::check() && Auth::user()->role_id == '3') {
            return $next($request);
        }
        abort(403); */
    }
}
