<?php

namespace Tests;

use DragonCode\LaravelJsonResponse\ServiceProvider;
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
        /** @var \Illuminate\Routing\RouteRegistrar $router */
        $router = $app['router'];

        $router->get('web', function () {
            return ['data' => 'Hello, Web!'];
        })->middleware('web');

        $router->get('api', function () {
            return ['data' => 'Hello, Api!'];
        })->middleware('api');

        $router->get('custom', function () {
            return ['data' => 'Hello, Custom!'];
        });
    }
}
