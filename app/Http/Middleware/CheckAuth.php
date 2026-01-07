<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckAuth
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('is_logged_in') || Session::get('is_logged_in') !== true) {
            return redirect()->route('login.form')
                ->with('error', 'Silakan login terlebih dahulu!');
        }
        return $next($request);
    }
}
