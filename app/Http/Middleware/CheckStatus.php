<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
{
    public function handle($request, Closure $next)
    {
        if (Auth::user()->status == 0) {
            Auth::logout();
            return redirect('login');
        }

        return $next($request);
    }
}
