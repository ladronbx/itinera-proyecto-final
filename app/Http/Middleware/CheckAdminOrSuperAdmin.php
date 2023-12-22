<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request; 

class CheckAdminOrSuperAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && ($user->role == 'admin' || $user->role == 'super_admin')) {
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized'], 403);
    }
}