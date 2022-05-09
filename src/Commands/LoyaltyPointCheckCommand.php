<?php

namespace Soap\LaravelLoyaltyPoint\Commands;

use Illuminate\Console\Command;

class LoyaltyPointCheckCommand extends Command
{
    public $signature = 'loyaltypoint:check';

    public $description = 'Check available points';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
