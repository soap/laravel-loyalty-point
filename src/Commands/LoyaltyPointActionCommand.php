<?php

namespace Soap\LaravelLoyaltyPoint\Commands;

use Illuminate\Console\Command;

class LoyaltyPointActionCommand extends Command
{
    public $signature = 'loyaltypoint:action';

    public $description = 'Create point action';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
