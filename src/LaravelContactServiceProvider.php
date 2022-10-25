<?php

namespace Wikeo\LaravelContact;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViews('laravel-contact')
            ->hasMigration('2022_10_20_100000_create_laravel-contact_table')
            ->runsMigrations()
            ->hasRoute('web');
    }
}
