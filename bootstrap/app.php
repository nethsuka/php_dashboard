<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CanChangeContributer;
use App\Http\Middleware\CheckAccessToNewMember;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(CanChangeContributer::class);
        $middleware->append(CheckAccessToNewMember::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
