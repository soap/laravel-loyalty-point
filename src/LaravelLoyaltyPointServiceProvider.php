<?php

namespace Soap\LaravelLoyaltyPoint;

use Soap\LaravelLoyaltyPoint\Commands\LoyaltyPointActionCommand;
use Soap\LaravelLoyaltyPoint\Commands\LoyaltyPointActionsCommand;
use Soap\LaravelLoyaltyPoint\Commands\LoyaltyPointCheckCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelLoyaltyPointServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-loyalty-point')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_loyalty_points_table')
            ->hasMigration('create_loyalty_point_trackings_table')
            ->hasCommand(LoyaltyPointActionCommand::class)
            ->hasCommand(LoyaltyPointActionsCommand::class)
            ->hasCommand(LoyaltyPointCheckCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(EventServiceProvider::class);
    }
}
