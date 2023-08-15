<?php
declare(strict_types=1);

namespace JsonStorage\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class JsonStorageServiceProvider extends ServiceProvider
{
    const PACKAGE_VENDOR = 'ydigitalteam';
    const PACKAGE_NAME = 'jsonstorage';

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

    private function getPackagePath(): string
    {
        return realpath(__DIR__ . '/www');
    }
}
