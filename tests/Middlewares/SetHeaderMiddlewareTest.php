<?php

namespace Tests\Middlewares;

use Lmc\HttpConstants\Header;
use Tests\TestCase;

class SetHeaderMiddlewareTest extends TestCase
{
    public function testWeb(): void
    {
        $this
            ->get('web')
            ->assertSuccessful()
            ->assertHeader(Header::ACCEPT, 'application/json')
            ->assertJsonStructure(['data'])
            ->assertJson(['data' => 'Hello, JSON!']);
    }

    public function testApi(): void
    {
        $this
            ->get('api')
            ->assertSuccessful()
            ->assertHeader(Header::ACCEPT, 'application/json')
            ->assertJsonStructure(['data'])
            ->assertJson(['data' => 'Hello, JSON!']);
    }
}
