<?php

namespace Soap\LaravelLoyaltyPoint;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Soap\LaravelLoyaltyPoint\Events\PointsGiven;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        PointsGiven::class => [
            //
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
