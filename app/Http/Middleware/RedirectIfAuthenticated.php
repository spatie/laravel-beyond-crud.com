<?php

namespace App\Http\Middleware;

use App\Http\App\Controllers\BuyVideoCourseController;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect(action(BuyVideoCourseController::class));
        }

        return $next($request);
    }
}
