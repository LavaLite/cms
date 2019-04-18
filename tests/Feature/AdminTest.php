<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * Test admin without login.
     *
     * @return void
     */
    public function testAdminWithoutLogin()
    {
        $response = $this->get('admin')
            ->assertStatus(302);
    }

    /**
     * Test admin with login.
     *
     * @return void
     */
    public function testAdminAfterLogin()
    {
        $user = User::find(1);

        guard('admin.web');
        $response = $this->actingAs($user, 'admin.web')
            ->get('admin')->assertOk();
    }

    /**
     * Test admin api without login.
     *
     * @return void
     */
    public function testAdminAPIWithoutLogin()
    {
        $response = $this->json('GET', 'api/admin')
            ->assertStatus(401);
    }

    /**
     * Test admin api with login.
     *
     * @return void
     */
    public function testAdminAPIAfterLogin()
    {
        $user = User::find(1);

        guard('admin.api');
        $response = $this->actingAs($user, 'admin.api')
            ->json('GET', 'api/admin')
            ->assertOk();
    }
}
