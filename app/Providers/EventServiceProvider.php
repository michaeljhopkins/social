<?php

namespace Social\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Social\Events\Event' => [
            'Social\Listeners\EventListener',
        ],
    ];
}
