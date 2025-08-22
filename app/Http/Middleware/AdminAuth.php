<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // List of allowed guards/roles
        $guards = ['superadmin', 'admin', 'esahayta', 'faculty', 'techsupport'];
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::guard($guard)->user()->is_public == 1) {
                // Optionally, check for specific role if needed:
                // if (in_array(Auth::guard($guard)->user()->role, $guards)) {
                return $next($request);
                // }
            }
        }
        // Logout from all guards just in case
        foreach ($guards as $guard) {
            Auth::guard($guard)->logout();
        }
        return redirect()->route('admin.login')->with('error', 'Please login first..!!');
    }
}
