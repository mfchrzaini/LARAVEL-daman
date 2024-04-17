<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * If user try to access an admin pages.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function handle($request, Closure $next)
     {
         if (auth()->check() && auth()->user()->role == 'admin') {
             return $next($request);
         }else {
            return redirect('403');
         }
     
     }
}
