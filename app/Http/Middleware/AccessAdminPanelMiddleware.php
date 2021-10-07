<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessAdminPanelMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (in_array(Auth::user()?->role, ['admin', 'developer'])) {
            return $next($request);
        }
        return redirect()->route('admin.login');
    }
}
