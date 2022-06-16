<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogin
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
                    return $next($request); //Si es admin continua al home
                    break;

                case ('2'):
                    return redirect('user'); //Si es un usuario normal redirige a USER
                    break;

                case ('3'):
                    return redirect('moderator'); //Si es un docente redirige a MODERATOR
                    break;
            }
        }


        /* if (Auth::check() && Auth::user()->role_id == '1') {
            return $next($request);
        }
        abort(403); */
    }
}
