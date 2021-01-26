<?php

namespace Tests\Feature\app\Http\Controllers\Admin\RolesControllerTest;


use App\Models\User;
use App\Models\Role;

class EditRouteTest extends AbstractRolesController
{
    /** @test */
    public function it_has_access_to_an_edit_route_for_super_admin()
    {
        $role = Role::create(['name' => 'edit_role']);
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('roles.edit', $role));

        $response->assertSuccessful();
    }

    /** @test */
    public function it_has_access_to_an_edit_path_for_authorized_users()
    {
        $role = Role::create(['name' => 'edit_role']);
        $this->actingAsUserWithPermission('edit roles');

        $response = $this->get(route('roles.edit', $role));

        $response->assertSuccessful();
    }

    /** @test */
    public function its_route_edit_redirect_a_guest_user()
    {
        $role = Role::create(['name' => 'edit_role']);

        $response = $this->get(route('roles.edit', $role));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function it_has_access_to_an_edit_path_only_for_authorized_users()
    {
        $role = Role::create(['name' => 'edit_role']);
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('roles.edit', $role));

        $response->assertForbidden();
    }
}
