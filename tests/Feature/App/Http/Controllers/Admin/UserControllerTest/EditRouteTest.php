<?php

namespace Tests\Feature\App\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;

class EditRouteTest extends AbstractUserController
{
    /** @test */
    public function superadmin_can_access_to_edit_users()
    {
        $user = User::factory()->create();
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.edit', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function user_with_permission_can_access_to_edit_users()
    {
        $user = User::factory()->create();
        $this->actingAsUserWithPermission('edit users');

        $response = $this->get(route('users.edit', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function guest_cannot_access_to_edit_users()
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.edit', $user));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function user_without_permission_can_access_to_edit_users()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route(
            'users.edit',
            User::factory()->create()
        ));

        $response->assertForbidden();
    }
}
