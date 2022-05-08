<?php

namespace Soap\LaravelRoyaltyPoint\Commands;

use Illuminate\Console\Command;

class RoyaltyPointActionCommand extends Command
{
    public $signature = 'royaltypoint:action';

    public $description = 'Create point action';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
