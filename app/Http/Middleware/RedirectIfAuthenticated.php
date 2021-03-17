<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard('admin')->check()) {

            return redirect('/admin');

          } else if (Auth::guard('mitra')->check()) {

            return redirect('/mitra');

          }else if (Auth::guard('konsumen')->check()) {

            return redirect('/konsumen');

        }
        return $next($request);
    }
}
