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
            ->hasMigrations([
                'create_expiring_methods_table',
                'create_loyalty_points_table',
                'create_loyalty_point_trackings_table', ])
            ->hasCommands([
                LoyaltyPointActionCommand::class,
                LoyaltyPointActionsCommand::class,
                LoyaltyPointCheckCommand::class,
            ]);
    }

    public function registeringPackage()
    {
        $this->app->register(EventServiceProvider::class);
    }
}
