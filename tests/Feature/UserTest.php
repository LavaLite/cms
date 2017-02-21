<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testUserWithoutLogin()
    {
        $response = $this->get('home');

        $response->assertStatus(302);
    }

    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testUserAfterLogin()
    {
        $user = User::find(3);

        $response = $this->actingAs($user)
            ->get('/home')
            ->assertStatus(200);
    }
}
