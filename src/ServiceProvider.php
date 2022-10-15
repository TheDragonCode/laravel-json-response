<?php

declare(strict_types=1);

namespace DragonCode\LaravelJsonResponse;

use DragonCode\LaravelJsonResponse\Middlewares\SetHeaderMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    protected $middleware = SetHeaderMiddleware::class;

    public function boot(): void
    {
        $this->publishConfig();

        $this->registerMiddleware($this->middlewareGroups());
    }

    public function register(): void
    {
        $this->registerConfig();
    }

    protected function registerMiddleware(array $groups): void
    {
        $this->toAll($groups)
            ? $this->resolve()->prependMiddleware($this->middleware)
            : $this->prependMiddlewareToGroups($this->middleware, $groups);
    }

    protected function prependMiddlewareToGroups(string $middleware, array $groups): void
    {
        foreach ($groups as $group) {
            $this->resolve()->prependMiddlewareToGroup($group, $middleware);
        }
    }

    protected function toAll(array $groups): bool
    {
        return empty($groups);
    }

    protected function middlewareGroups(): array
    {
        return array_filter(Arr::wrap(
            $this->app['config']->get('http.response.json')
        ));
    }

    protected function publishConfig(): void
    {
        $this->publishes([
            __DIR__ . '/../config/http.php' => $this->app->configPath('http.php'),
        ]);
    }

    protected function registerConfig(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/http.php',
            'http'
        );
    }

    protected function resolve(): Kernel
    {
        return $this->app->make(Kernel::class);
    }
}
