<?php

namespace Soap\LaravelLoyaltyPoint\Traits;

trait Pointable 
{

    public function points()
    {
        return $this->morphToMany(LoyaltyPoint::class, 'pointable');
    }
}