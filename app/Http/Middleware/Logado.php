<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class Logado
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
        if (!isset($_SESSION['sessao'])){
            $_SESSION['session'] = time();
        }
        if (auth()->check()) {
            return $next($request);
        }else {
            return Redirect::to('error/500');
        }
    }
}
