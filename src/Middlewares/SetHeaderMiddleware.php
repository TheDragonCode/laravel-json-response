<?php

namespace Helldar\LaravelJsonResponse\Middlewares;

use Closure;
use Illuminate\Http\Request;

final class SetHeaderMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        return $response->header('Accept', 'application/json');
    }
}
