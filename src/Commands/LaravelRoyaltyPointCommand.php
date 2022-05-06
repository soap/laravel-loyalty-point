<?php

namespace Soap\LaravelRoyaltyPoint\Commands;

use Illuminate\Console\Command;

class LaravelRoyaltyPointCommand extends Command
{
    public $signature = 'laravel-royalty-point';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
