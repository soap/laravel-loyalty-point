<?php

namespace Soap\LaravelLoyaltyPoint\Commands;

use Illuminate\Console\Command;

class LoyaltyPointActionsCommand extends Command
{
    public $signature = 'loyaltypoint:actions';

    public $description = 'List available actions';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
