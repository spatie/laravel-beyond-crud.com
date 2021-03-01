<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RemembersReferrer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($referrer = $request->get('referrer')) {
            $request->session()->put('referrer', $referrer);
        }

        return $next($request);
    }
}
