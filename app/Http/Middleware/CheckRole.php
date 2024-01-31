<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if ($user) {
            foreach ($roles as $role) {
                if ($user->hasRole($role)) {
                    return $next($request);
                }
            }
        }

        return redirect('/home'); // Redirect to home for unauthorized users.
    }
}
