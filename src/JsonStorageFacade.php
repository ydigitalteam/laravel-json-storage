<?php

namespace JsonStorage;

use Illuminate\Support\Facades\Facade;
use JsonStorage\Providers\JsonStorageServiceProvider;

class JsonStorageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor()
    {
        return JsonStorageServiceProvider::PACKAGE_NAME;
    }
}
