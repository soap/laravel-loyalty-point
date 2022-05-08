<?php

namespace Soap\LaravelRoyaltyPoint\Commands;

use Illuminate\Console\Command;

class RoyaltyPointActionsCommand extends Command
{
    public $signature = 'royaltypoint:actions';

    public $description = 'List available actions';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
