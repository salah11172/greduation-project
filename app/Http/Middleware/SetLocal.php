<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocal
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
        app()->setLocale($request->segment(1));
        return $next($request);
    }
}
