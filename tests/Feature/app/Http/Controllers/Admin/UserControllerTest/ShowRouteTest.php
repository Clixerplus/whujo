<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;
use App\Models\Role;

class ShowRouteTest extends AbstractUserController
{


    /** @test */
    public function it_has_access_to_an_show_route_for_super_admin()
    {
        $user = User::factory()->create();
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.show', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function it_has_access_to_an_show_route_for_authorized_users()
    {
        $user = User::factory()->create();
        $this->actingAsUserWithPermission('view users');

        $response = $this->get(route('users.show', $user));

        $response->assertSuccessful();
    }

    /** @test */
    public function its_route_show_redirect_a_guest_user()
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.show', $user));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_have_restricted_access_to_an_show_route_for_unauthorized_users()
    {
        $user = User::factory()->create();
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('users.show', $user));

        $response->assertForbidden();
    }
}
