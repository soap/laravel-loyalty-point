<?php

namespace Soap\LaravelRoyaltyPoint;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Soap\LaravelRoyaltyPoint\Commands\RoyaltyPointActionCommand;
use Soap\LaravelRoyaltyPoint\Commands\RoyaltyPointActionsCommand;
use Soap\LaravelRoyaltyPoint\Commands\RoyaltyPointCheckCommand;

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
            ->hasMigration('create_royalty_points_table')
            ->hasMigration('create_royalty_point_trackings_table')
            ->hasCommand(RoyaltyPointActionCommand::class)
            ->hasCommand(RoyaltyPointActionsCommand::class)
            ->hasCommand(RoyaltyPointCheckCommand::class);
    }
}
