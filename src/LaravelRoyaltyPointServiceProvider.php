<?php

namespace Soap\LaravelRoyaltyPoint;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\LaravelRoyaltyPoint\Commands\LaravelRoyaltyPointCommand;

class LaravelRoyaltyPointServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-royalty-point')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-royalty-point_table')
            ->hasCommand(LaravelRoyaltyPointCommand::class);
    }
}
