<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;
use App\Http\Middleware\UserVerifyMiddleware;
use App\Http\Middleware\UserDeviceMiddleware;
use App\Http\Middleware\AccessApiMiddleware;
use App\Http\Middleware\CountDailyVisitors;
use Illuminate\Console\Scheduling\Schedule;
use App\Http\Middleware\AccessMiddleware;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Application;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'visits' => CountDailyVisitors::class,
            'locale' => LocaleMiddleware::class,
            'access' => AccessMiddleware::class,
            'access.api' => AccessApiMiddleware::class,
            'device.token' => UserDeviceMiddleware::class,
            'user.verify' => UserVerifyMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        if (request()->is('api/*') || request()->ajax()) {
            $exceptions->renderable(function (NotFoundHttpException $e) {
                return error_response(__('message.Not found'), 404);
            });

            $exceptions->renderable(function (ValidationException $e) {
                return error_response($e->errors(), 422);
            });

            $exceptions->renderable(function (QueryException $e) {
                if (preg_match('/^SQLSTATE\[23503\]/', $e->getMessage())) {
                    return error_response(__('message.Not delete'), 403);
                }
            });
            $exceptions->renderable(function (ThrottleRequestsException $e) {
                return error_response(__('message.Too many attempts'), 429, [
                    'retry' => $e->getHeaders()['Retry-After'] ?? 60
                ]);
            });
        }
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->command('notification:send')->everyMinute();
        $schedule->command('telescope:response-clear')->quarterly();
        $schedule->command('backup:run ', ['--only-db'])->dailyAt('00:00');
    })
    ->create();
