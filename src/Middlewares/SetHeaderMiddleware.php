<?php

namespace DragonCode\LaravelJsonResponse\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Lmc\HttpConstants\Header;
use Symfony\Component\HttpFoundation\JsonResponse;

class SetHeaderMiddleware
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        /** @var \Illuminate\Http\Response $response */
        $response = $next($request);

        return $this->hasJson($response) ? $response : $response->header(Header::ACCEPT, 'application/json');
    }

    protected function hasJson($response): bool
    {
        return $response instanceof JsonResponse;
    }
}
