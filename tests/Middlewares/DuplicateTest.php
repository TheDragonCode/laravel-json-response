<?php

namespace Tests\Middlewares;

use Helldar\LaravelJsonResponse\Middlewares\SetHeaderMiddleware;
use Tests\TestCase;

final class DuplicateTest extends TestCase
{
    public function testCount()
    {
        foreach ($this->getMiddlewareGroups() as $group => $middlewares) {
            $count = count(array_filter($middlewares, static function ($middleware) {
                return $middleware === SetHeaderMiddleware::class;
            }));

            $this->assertSame(1, $count, "The count of registered intermediaries is $count for $group, should be 1.");
        }
    }
}
