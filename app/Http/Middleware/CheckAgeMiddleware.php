<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;

use Closure;
use Illuminate\Http\Request;

class CheckAgeMiddleware
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
        $age = session()->get('age');
        if ($age > 18) {
            return $next($request);
        }
        return redirect('/restricted');
    }
}
