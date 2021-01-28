<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;

class CreateRouteTest extends AbstractUserController
{

    /** @test */
    public function superadmin_can_access_to_create_users()
    {
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.create'));

        $response->assertSuccessful();
    }

    /** @test */
    public function user_with_permission_can_access_to_create_users()
    {
        $this->actingAsUserWithPermission('create users');

        $response = $this->get(route('users.create'));

        $response->assertSuccessful();
    }

    /** @test */
    public function guest_cannot_access_to_create_users()
    {
        $response = $this->get(route('users.create'));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function user_without_permission_can_access_to_create_users()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('users.create'));

        $response->assertForbidden();
    }
}
