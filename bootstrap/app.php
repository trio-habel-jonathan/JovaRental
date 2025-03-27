<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'VerifiedEntity' => \App\Http\Middleware\VerifikasiEntitasMiddleware::class,
            'CheckRole' => \App\Http\Middleware\CheckRoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        if (!config('app.debug')) {
            $exceptions->render(function (NotFoundHttpException $e, $request) {
                return response()->view('errors.404', [], 404);
            });

            $exceptions->render(function (Throwable $e, $request) {
                if (app()->isDownForMaintenance()) {
                    return response()->view('errors.503', [], 503);
                }
            });

            $exceptions->render(function (Throwable $e, $request) {
                if (app()->isDownForMaintenance()) {
                    return response()->view('errors.500', [], 500);
                }
            });
        }
    })->create();
