<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
class RedirectIfAuthenticated
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('is_logged_in') && session('is_logged_in') === true) {
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
