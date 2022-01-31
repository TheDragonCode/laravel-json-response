<?php

namespace DragonCode\LaravelJsonResponse;

use DragonCode\LaravelJsonResponse\Middlewares\SetHeaderMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
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
        return Arr::has($this->getGroups(), $group);
    }

    protected function doesntMiddleware(string $group, string $middleware): bool
    {
        $group = Arr::get($this->getGroups(), $group);

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
