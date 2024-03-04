<?php

declare(strict_types=1);

namespace DragonCode\LaravelJsonResponse\Middlewares;

use Closure;
use Illuminate\Support\Str;
use Lmc\HttpConstants\Header;

class SetHeaderMiddleware
{
    public function handle($request, Closure $next)
    {
        return $this->set(
            $next($this->set($request))
        );
    }

    protected function set($request)
    {
        if (!$this->hasHeader($request) || $this->isAsterisk($request)) {
            $request->headers->set(Header::ACCEPT, 'application/json');
        }

        return $request;
    }

    protected function hasHeader($request): bool
    {
        return $request->headers->has(Header::ACCEPT);
    }

    protected function isAsterisk($request): bool
    {
        return Str::contains($request->headers->get(Header::ACCEPT, ''), '*/*');
    }
}
