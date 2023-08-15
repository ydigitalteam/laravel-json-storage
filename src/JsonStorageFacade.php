<?php

namespace JsonStorage;

use Illuminate\Support\Facades\Facade;

class JsonStorageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return JsonStorageServiceProvider::PACKAGE_NAME;
    }
}