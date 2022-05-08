<?php

namespace Soap\LaravelRoyaltyPoint\Commands;

use Illuminate\Console\Command;

class LaravelRoyaltyPointCommand extends Command
{
    public $signature = 'royaltypoint:check';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
