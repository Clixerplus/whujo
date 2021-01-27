<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;

class EditRouteTest extends AbstractUserController
{
    /** @test */
    public function it_has_access_to_an_edit_route_for_super_admin()
    {
        $user = User::factory()->create();
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.edit', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function it_has_access_to_an_edit_path_for_authorized_users()
    {
        $user = User::factory()->create();
        $this->actingAsUserWithPermission('edit users');

        $response = $this->get(route('users.edit', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function its_route_edit_redirect_a_guest_user()
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.edit', $user));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_has_access_to_an_edit_path_only_for_authorized_users()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route(
            'users.edit',
            User::factory()->create()
        ));

        $response->assertForbidden();
    }
}
