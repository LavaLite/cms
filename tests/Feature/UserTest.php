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
        $response = $this->get('user')
            ->assertStatus(404);
    }

    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testUserAfterLogin()
    {
        $user = User::find(3);

        $response = $this->actingAs($user, 'user.web')
            ->get('user');
    }
}
