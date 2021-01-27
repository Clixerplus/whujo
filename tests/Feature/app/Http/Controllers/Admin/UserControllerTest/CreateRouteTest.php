<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;

class CreateRouteTest extends AbstractUserController
{

    /** @test */
    public function it_has_access_to_an_create_route_for_super_admin()
    {
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.create'));

        $response->assertSuccessful();
    }

    /** @test */
    public function it_has_access_to_an_create_path_for_authorized_users()
    {
        $this->actingAsUserWithPermission('create users');

        $response = $this->get(route('users.create'));

        $response->assertSuccessful();
    }

    /** @test */
    public function its_route_create_redirect_a_guest_user()
    {
        $response = $this->get(route('users.create'));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_has_access_to_an_create_path_only_for_authorized_users()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('users.create'));

        $response->assertForbidden();
    }
}
