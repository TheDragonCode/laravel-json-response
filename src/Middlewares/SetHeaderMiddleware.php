<?php

namespace DragonCode\LaravelJsonResponse\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Lmc\HttpConstants\Header;

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
        $response = $next($request);

        $this->set($response);

        return $response;
    }

    /**
     * @param \Illuminate\Http\JsonResponse|\Illuminate\Http\Response $response
     *
     * @return void
     */
    protected function set($response)
    {
        $response->headers->set(Header::ACCEPT, 'application/json');
    }
}
