<?php

namespace Soap\LaravelLoyaltyPoint\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Soap\LaravelLoyaltyPoint\Models\ExpiringMethod;

class ExpiringMethodFactory extends Factory
{
    protected $model = ExpiringMethod::class;

    public function definition()
    {
        return [
            'name' => $this->faker->title,
            'expiring_period' => 'after',
            'expiring_value' => 10,
            'expiring_unit' => 'day',
        ];
    }
}