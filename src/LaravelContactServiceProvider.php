<?php

namespace Wikeo\LaravelContact;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wikeo\LaravelContact\Commands\LaravelContactCommand;

class LaravelContactServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-contact')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-contact_table')
            ->hasCommand(LaravelContactCommand::class);
    }
}
