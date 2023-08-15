<?php

namespace LaravelJsonStorage\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelJsonStorageServiceProvider extends ServiceProvider
{
    const PACKAGE_VENDOR = 'ydigitalteam';
    const PACKAGE_NAME = 'laraveljsonstorage';

    const COMMANDS = [
        //
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Registering package commands
        $this->commands(self::COMMANDS);
    }


    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom($this->getPackagePath() . '/config/config.php', self::PACKAGE_NAME);

    }

    private function getPackagePath()
    {
        return realpath(__DIR__ . '/www');
    }
}
