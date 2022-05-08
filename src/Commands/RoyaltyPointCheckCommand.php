<?php

namespace Soap\LaravelRoyaltyPoint\Commands;

use Illuminate\Console\Command;

class RoyaltyPointCheckCommand extends Command
{
    public $signature = 'royaltypoint:check';

    public $description = 'Check available points';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
