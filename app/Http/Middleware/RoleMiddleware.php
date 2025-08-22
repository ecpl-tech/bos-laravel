<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, ...$roles)
    {
        $guards = ['superadmin', 'admin', 'esahayta', 'faculty', 'techsupport', null]; // null for default guard
        foreach ($guards as $guard) {
            $user = auth($guard)->user();
            if ($user && method_exists($user, 'hasRole')) {
                // If user is authenticated but does not have the required role, log out and redirect
                if (!$user->hasRole($roles)) {
                    auth($guard)->logout();
                    if (session()->has('_token')) {
                        session()->invalidate();
                        session()->regenerateToken();
                    }
                    return redirect()->route('admin.login');
                }
                return $next($request);
            }
        }
        // If not authenticated, redirect to login
        return redirect()->route('admin.login');
    }
}
