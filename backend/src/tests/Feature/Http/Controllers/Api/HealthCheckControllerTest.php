<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HealthCheckControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the index endpoint returns a successful response
     * with the expected data structure.
     */
    public function testIndexEndpointReturnsHealthyResponse()
    {
        $response = $this->getJson('/api/health');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'environment',
                'timestamp',
            ])
            ->assertJson([
                'status' => 'healthy',
                'environment' => env('APP_ENV'),
            ]);
    }
}
