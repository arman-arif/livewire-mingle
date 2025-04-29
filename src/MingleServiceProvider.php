<?php

namespace Aarif\MingleJs;

use Aarif\MingleJs\Commands\MingleInstallerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Aarif\MingleJs\Commands\MingleMakeCommand;

class MingleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('minglejs')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommands(...[
                MingleMakeCommand::class,
                MingleInstallerCommand::class
            ]);
    }
}
