<?php

namespace prueba2\Http\Middleware;

use Closure;

class sesion
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
            //valiuda si el user es admin o tiene permisos
        if (1 == 1) {
            return $next($request);
        }else {

            dd (...args: 'No teines permisos para ver esta seccion');
        }
        

    }


}
