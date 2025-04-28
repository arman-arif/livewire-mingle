<?php

namespace Ariful\LivewireMingle;

use Ariful\LivewireMingle\Commands\MingleInstallerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ariful\LivewireMingle\Commands\MingleMakeCommand;

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
            ->name('livewire-mingle')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommands(...[
                MingleMakeCommand::class,
                MingleInstallerCommand::class
            ]);
    }
}
