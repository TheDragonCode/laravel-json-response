<?php

namespace Tests;

use DragonCode\LaravelJsonResponse\ServiceProvider;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Routing\Router;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected $groups = null;

    protected function getPackageProviders($app): array
    {
        return [ServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $this->setRoutes($app['router']);
        $this->setConfig($app['config']);
    }

    protected function setRoutes(Router $router): void
    {
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

    protected function setConfig(Repository $config): void
    {
        $config->set('http.response.json', $this->groups);
    }
}
