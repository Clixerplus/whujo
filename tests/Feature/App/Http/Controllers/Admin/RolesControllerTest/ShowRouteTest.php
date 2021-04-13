<?php
namespace Tests\Feature\App\Http\Controllers\Admin\RolesControllerTest;


use App\Models\User;
use App\Models\Role;

class ShowRouteTest extends AbstractRolesController
{


    /** @test */
    public function it_has_access_to_an_show_route_for_super_admin()
    {
        $role = Role::create(['name' => 'test_role']);
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('roles.show', $role));

        $response->assertSuccessful();
    }

    /** @test */
    public function it_has_access_to_an_show_route_for_authorized_users()
    {
        $role = Role::create(['name' => 'test_role']);
        $this->actingAsUserWithPermission('view roles');

        $response = $this->get(route('roles.show', $role));

        $response->assertSuccessful();
    }

    /** @test */
    public function its_route_show_redirect_a_guest_user()
    {
        $role = Role::create(['name' => 'test_role']);

        $response = $this->get(route('roles.show', $role));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_have_restricted_access_to_an_show_route_for_unauthorized_users()
    {
        $role = Role::create(['name' => 'test_role']);
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('roles.show', $role));

        $response->assertForbidden();
    }

}
