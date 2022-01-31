<?php

namespace DragonCode\LaravelJsonResponse\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Lmc\HttpConstants\Header;

class SetHeaderMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        return $response->header(Header::ACCEPT, 'application/json');
    }
}
