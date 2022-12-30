<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, class-string|string>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
<<<<<<< HEAD
        \Fruitcake\Cors\HandleCors::class,
=======
        \Illuminate\Http\Middleware\HandleCors::class,
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<string, array<int, class-string|string>>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
<<<<<<< HEAD
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
=======
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<string, class-string|string>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
<<<<<<< HEAD
=======
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
<<<<<<< HEAD
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
=======
        'signed' => \App\Http\Middleware\ValidateSignature::class,
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'ensureUserRole' => \App\Http\Middleware\EnsureUserRole::class,
    ];
}
