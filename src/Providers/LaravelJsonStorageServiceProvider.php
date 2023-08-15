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
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api_v1.php');
        if ($this->app->runningInConsole()) {
            //
        }
    }


    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom($this->getPackagePath() . '/config/config.php', self::PACKAGE_NAME);

        // Register the main class to use with the facade
//        $this->app->singleton(self::PACKAGE_NAME, static function () {
//            return new DemoAccessController();
//        });
    }

    private function getPackagePath()
    {
        return realpath(__DIR__ . '/www');
    }
}
