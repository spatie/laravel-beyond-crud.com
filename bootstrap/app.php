<?php

use App\Http\Middleware\RemembersReferrer;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\LaravelFlare\Facades\Flare;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->trustProxies(at: '*');

        $middleware->web(append: [
            RemembersReferrer::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        Flare::handles($exceptions);
    })->create();
