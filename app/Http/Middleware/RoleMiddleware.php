<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        /* if (!auth()->user()->hasAnyRole($roles)) {
            abort(403);
        } */

        if (Auth::check()) {
            $user = Auth::user();
            if ($user->hasAnyRole($roles)) {
                return $next($request);
            }
        } else {
            return redirect('/');
        }

        return $next($request);
    }
}
