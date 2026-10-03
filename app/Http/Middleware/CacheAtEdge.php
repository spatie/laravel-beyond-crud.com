<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheAtEdge
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! $this->shouldCache($request, $response)) {
            return $response;
        }

        $response->headers->remove('Set-Cookie');
        $response->headers->set('Cache-Control', 'max-age=60, public, s-maxage=604800');

        return $response;
    }

    protected function shouldCache(Request $request, Response $response): bool
    {
        if (app()->isLocal()) {
            return false;
        }

        if (! $request->isMethodCacheable()) {
            return false;
        }

        if ($request->hasSession()) {
            return false;
        }

        if ($request->is('up')) {
            return false;
        }

        return in_array($response->getStatusCode(), [200, 404]);
    }
}
