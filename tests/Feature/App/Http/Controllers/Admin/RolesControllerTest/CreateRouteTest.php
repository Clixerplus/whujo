<?php

namespace Tests\Feature\App\Http\Controllers\Admin\RolesControllerTest;


use App\Models\User;

class CreateRouteTest extends AbstractRolesController
{
    /** @test */
    public function it_has_access_to_an_create_route_for_super_admin()
    {
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('roles.create'));

        $response->assertSuccessful();
    }

    /** @test */
    public function it_has_access_to_an_create_path_for_authorized_users()
    {
        $this->actingAsUserWithPermission('create roles');

        $response = $this->get(route('roles.create'));

        $response->assertSuccessful();
    }

    /** @test */
    public function its_route_create_redirect_a_guest_user()
    {
        $response = $this->get(route('roles.create'));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_has_access_to_an_create_path_only_for_authorized_users()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('roles.create'));

        $response->assertForbidden();
    }
}
