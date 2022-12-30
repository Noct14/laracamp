<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * The event listener mappings for the application.
     *
     * @var array
=======
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
<<<<<<< HEAD
=======

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
}
