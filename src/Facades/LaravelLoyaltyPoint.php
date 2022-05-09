<?php

namespace Soap\LaravelLoyaltyPoint\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\LaravelLoyaltyPoint\LaravelLoyaltyPoint
 */
class LaravelLoyaltyPoint extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-loyalty-point';
    }
}
