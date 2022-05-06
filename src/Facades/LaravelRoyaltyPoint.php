<?php

namespace Soap\LaravelRoyaltyPoint\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\LaravelRoyaltyPoint\LaravelRoyaltyPoint
 */
class LaravelRoyaltyPoint extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-royalty-point';
    }
}
