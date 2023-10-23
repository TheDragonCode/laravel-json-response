<?php

declare(strict_types=1);

namespace DragonCode\LaravelJsonResponse\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Lmc\HttpConstants\Header;

class SetHeaderMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($this->set($request));

        return $this->set($response);
    }

    protected function set($request)
    {
        if (! $request->hasHeader(Header::ACCEPT)) {
            $request->headers->set(Header::ACCEPT, 'application/json');
        }

        return $request;
    }
}
