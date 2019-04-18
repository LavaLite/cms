<?php

namespace Tests\Feature;

use App\Client;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testClientWithoutLogin()
    {
        $response = $this->get('client')
            ->assertStatus(302);
    }

    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testClientAfterLogin()
    {
        $client = Client::find(1);
        guard('client.web');
        $response = $this->actingAs($client, 'client.web')
            ->get('client')->assertOk();
    }

    /**
     * Test client api without login.
     *
     * @return void
     */
    public function testClientAPIWithoutLogin()
    {
        $response = $this->json('GET', 'api/client')
            ->assertStatus(401);
    }

    /**
     * Test client api with login.
     *
     * @return void
     */
    public function testClientAPIAfterLogin()
    {
        $user = Client::find(1);

        guard('client.api');
        $response = $this->actingAs($user, 'client.api')
            ->json('GET', 'api/client')
            ->assertOk();
    }
}
