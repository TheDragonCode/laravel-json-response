<?php

namespace Tests\Middlewares;

use Tests\TestCase;

class SetHeaderMiddlewareTest extends TestCase
{
    public function testWeb(): void
    {
        $this
            ->get('web')
            ->assertSuccessful()
            ->assertHeader('Accept', 'application/json')
            ->assertJsonStructure(['data'])
            ->assertJson(['data' => 'Hello, JSON!']);
    }

    public function testApi(): void
    {
        $this
            ->get('api')
            ->assertSuccessful()
            ->assertHeader('Accept', 'application/json')
            ->assertJsonStructure(['data'])
            ->assertJson(['data' => 'Hello, JSON!']);
    }
}
