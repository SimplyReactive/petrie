<?php

namespace petrie\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
        'petrie\Http\Middleware\VerifyCsrfToken',
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'          => 'petrie\Http\Middleware\Authenticate',
        'auth.basic'    => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'guest'         => 'petrie\Http\Middleware\RedirectIfAuthenticated',
        'sentry.auth'   => 'Sentinel\Middleware\SentryAuth',
        'sentry.admin'  => 'Sentinel\Middleware\SentryAdminAccess'
    ];
}
