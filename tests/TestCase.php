<?php

namespace Tests;

use Helldar\LaravelJsonResponse\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [ServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $this->setRoutes($app);
    }

    protected function setRoutes($app): void
    {
        $app['router']->get('web', function () {
            return ['data' => 'Hello, JSON!'];
        })->middleware('web');

        $app['router']->get('api', function () {
            return ['data' => 'Hello, JSON!'];
        })->middleware('api');
    }

    protected function getMiddlewareGroups(): array
    {
        return $this->app->make(Kernel::class)->getMiddlewareGroups();
    }
}
