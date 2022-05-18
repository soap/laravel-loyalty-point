<?php

namespace Soap\LaravelLoyaltyPoint\Tests\Unit;

use Carbon\Carbon;
use Soap\LaravelLoyaltyPoint\Models\ExpiringMethod;
use Soap\LaravelLoyaltyPoint\Tests\TestCase;

class ExpiringMethodTest extends TestCase
{
    /** @test */
    public function an_expiring_method_has_name()
    {
        $expiringMethod = ExpiringMethod::factory()->make([
            'name' => 'Expiring after 10 days',
        ]);

        $this->assertEquals('Expiring after 10 days', $expiringMethod->name);
    }

    /** @test */
    public function an_expiring_method_has_expiring_period()
    {
        $expiringMethod = ExpiringMethod::factory()->make([
            'name' => 'Expiring after 10 days',
            'expiring_period' => 'after',
        ]);

        $this->assertEquals('after', $expiringMethod->expiring_period);
    }

    /** @test */
    public function an_expiring_method_has_expiring_unit()
    {
        $expiringMethod = ExpiringMethod::factory()->make([
            'name' => 'Expiring after 10 days',
            'expiring_unit' => 'day',
        ]);

        $this->assertEquals('day', $expiringMethod->expiring_unit);
    }

    /** @test */
    public function an_expiring_method_can_calculate_expiring_at_end_of_week()
    {
        $expiringMethod = ExpiringMethod::factory()->make([
            'name' => 'Expiring after 10 days',
            'expiring_period' => 'end of',
            'expiring_unit' => 'week',
        ]);

        $startDate = Carbon::now();
        $this->assertEquals($startDate->endOfWeek(), $expiringMethod->getExpiringDate($startDate));
    }

    /** @test */
    public function an_expiring_method_can_calculate_expiring_at_end_of_month()
    {
        $expiringMethod = ExpiringMethod::factory()->make([
            'name' => 'Expiring after 10 days',
            'expiring_period' => 'end of',
            'expiring_unit' => 'month',
        ]);

        $startDate = Carbon::now();
        $this->assertEquals($startDate->endOfMonth(), $expiringMethod->getExpiringDate($startDate));
    }

    /** @test */
    public function an_expiring_method_can_calculate_expiring_at_end_of_year()
    {
        $expiringMethod = ExpiringMethod::factory()->make([
            'name' => 'Expiring after 10 days',
            'expiring_period' => 'end of',
            'expiring_unit' => 'month',
        ]);

        $startDate = Carbon::now();
        $this->assertEquals($startDate->endOfMonth(), $expiringMethod->getExpiringDate($startDate));
    }
}
