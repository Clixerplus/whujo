<?php

namespace Tests\Feature\App\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;
use App\Models\Role;

class ShowRouteTest extends AbstractUserController
{


    /** @test */
    public function superadmin_can_access_to_see_users()
    {
        $user = User::factory()->create();
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.show', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function user_with_permission_can_access_to_see_users()
    {
        $user = User::factory()->create();
        $this->actingAsUserWithPermission('view users');

        $response = $this->get(route('users.show', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function guest_cannot_access_to_see_users()
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.show', $user));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function user_without_permission_can_access_to_see_users()
    {
        $user = User::factory()->create();
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('users.show', $user));

        $response->assertForbidden();
    }
}
