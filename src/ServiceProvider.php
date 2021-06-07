<?php

namespace Helldar\LaravelJsonResponse;

use Helldar\LaravelJsonResponse\Middlewares\SetHeaderMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

final class ServiceProvider extends BaseServiceProvider
{
    protected $groups = ['web', 'api'];

    public function boot(): void
    {
        foreach ($this->groups as $group) {
            $this->prepend($group, SetHeaderMiddleware::class);
        }
    }

    protected function prepend(string $group, string $middleware): void
    {
        if ($this->has($group, $middleware)) {
            $this->resolve()->prependMiddlewareToGroup($group, $middleware);
        }
    }

    protected function has(string $group, string $middleware): bool
    {
        return $this->hasGroup($group) && $this->doesntMiddleware($group, $middleware);
    }

    protected function hasGroup(string $group): bool
    {
        $groups = $this->getGroups();

        return isset($groups[$group]);
    }

    protected function doesntMiddleware(string $group, string $middleware): bool
    {
        $groups = $this->getGroups();

        $group = $groups[$group];

        return ! in_array($middleware, $group);
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
