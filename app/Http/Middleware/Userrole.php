<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Userrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        // Проверяем вход роли
       if(!$request->user()->hasRole($role)){
            // выводим страницу ошибки 404
            abort(404);
        }
        // Дальше переходим по странице
        return $next($request);
    }
}
