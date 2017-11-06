<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testAdminWithoutLogin()
    {
        $response = $this->get('admin')
            ->assertStatus(404);
    }

    /**
     * Test performed without login.
     *
     * @return void
     */
    public function testAdminAfterLogin()
    {
        $user = User::find(1);

        putenv("guard=admin.web");
        $response = $this->actingAs($user, 'admin.web')
            ->get('admin');
    }
}
