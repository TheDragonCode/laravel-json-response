<?php

namespace Helldar\LaravelJsonResponse;

use Helldar\LaravelJsonResponse\Middlewares\SetHeaderMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

final class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->prepend('web', SetHeaderMiddleware::class);
        $this->prepend('api', SetHeaderMiddleware::class);
    }

    protected function prepend(string $group, string $middleware): void
    {
        if ($this->hasGroup($group)) {
            $this->resolve()->prependMiddlewareToGroup($group, $middleware);
        }
    }

    protected function hasGroup(string $group): bool
    {
        $groups = $this->getGroups();

        return isset($groups[$group]);
    }

    protected function getGroups(): array
    {
        return $this->resolve()->getMiddlewareGroups();
    }

    protected function resolve(): Kernel
    {
        return $this->app->make(Kernel::class);
    }
}
