<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;

class IndexRouteTest extends AbstractUserController
{

    /** @test */
    public function it_has_access_to_an_index_route_for_super_admin()
    {
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.index'));

        $response->assertSuccessful();
    }

    /** @test */
    public function it_has_access_to_an_index_route_for_authorized_users()
    {
        $this->actingAsUserWithPermission('viewAll users');

        $response = $this->get(route('users.index'));

        $response->assertSuccessful();
    }

    /** @test */
    public function its_route_index_redirect_a_guest_user()
    {
        $response = $this->get(route('users.index'));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_have_restricted_access_to_an_index_route_for_unauthorized_users()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('users.index'));

        $response->assertForbidden();
    }
}
