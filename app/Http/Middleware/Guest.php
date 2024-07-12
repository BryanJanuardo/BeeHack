<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::guard('customer')->check())
            return redirect()->route('customer.dashboard.index');

        if(Auth::guard('tukang')->check())
            return redirect()->route('tukang.dashboard.index');

        if(Auth::guard('admin')->check())
            return redirect()->route('admin.dashboard.index');

        return $next($request);
    }
}
