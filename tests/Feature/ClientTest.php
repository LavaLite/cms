<?php

namespace Tests\Feature;

use App\User;
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
        $response = $this->get('client');

        $response->assertStatus(302);
    }

    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testClientAfterLogin()
    {
        $user = User::find(1);

        $response = $this->actingAs($user, 'client.web')
            ->get('/client')
            ->assertStatus(200);
    }
}
