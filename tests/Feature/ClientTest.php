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
            ->assertStatus(404);
    }

    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testClientAfterLogin()
    {
        $client = Client::find(1);

        $response = $this->actingAs($client, 'client.web')
            ->get('client');
    }
}
