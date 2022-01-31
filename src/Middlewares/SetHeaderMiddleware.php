<?php

namespace DragonCode\LaravelJsonResponse\Middlewares;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Lmc\HttpConstants\Header;

class SetHeaderMiddleware
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next): JsonResponse
    {
        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        return $response->header(Header::ACCEPT, 'application/json');
    }
}
