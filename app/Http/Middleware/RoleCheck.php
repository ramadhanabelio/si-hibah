<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed ...$roles  Role yang diizinkan (contoh: 'Super Admin', 'Root')
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::guard('web')->check()) {
            $user = Auth::guard('web')->user();

            if (in_array($user->role, $roles)) {
                return $next($request);
            }
        }

        if ($request->expectsJson()) {
            return errorResponse('unauthorized');
        } else {
            abort(403, 'Unauthorized');
        }
    }
}
