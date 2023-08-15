<?php

namespace LaravelJsonStorage;

use Illuminate\Support\Facades\Facade;
use LaravelJsonStorage\Providers\LaravelJsonStorageServiceProvider;

class LaravelJsonStorageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return LaravelJsonStorageServiceProvider::PACKAGE_NAME;
    }
}
