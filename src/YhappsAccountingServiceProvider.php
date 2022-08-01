<?php

namespace Yhapps\YhappsAccounting;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yhapps\YhappsAccounting\Commands\YhappsAccountingCommand;

class YhappsAccountingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('yhappsaccounting')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_yhappsaccounting_table')
            ->hasCommand(YhappsAccountingCommand::class);
    }
}
