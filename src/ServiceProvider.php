<?php

namespace DragonCode\LaravelJsonResponse;

use DragonCode\LaravelJsonResponse\Middlewares\SetHeaderMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    protected $middleware = SetHeaderMiddleware::class;

    public function boot(): void
    {
        $this->resolve()->prependMiddleware($this->middleware);
        $this->resolve()->prependToMiddlewarePriority($this->middleware);
    }

    protected function resolve(): Kernel
    {
        return $this->app->make(Kernel::class);
    }
}
