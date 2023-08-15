<?php

namespace YdigitalTeam\LaravelJsonStorage\Test;

use Orchestra\Testbench\TestCase;

abstract class FeatureTestCase extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            'YdigitalTeam\LaravelJsonStorage\Providers\LaravelJsonStorageServiceProvider',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function setUpDatabase()
    {
        $this->artisan('migrate')->run();
    }
}