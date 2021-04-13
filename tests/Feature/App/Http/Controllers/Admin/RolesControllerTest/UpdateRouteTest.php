<?php

namespace Tests\Feature\App\Http\Controllers\Admin\RolesControllerTest;


use App\Models\User;
use App\Models\Role;

class UpdateRouteTest extends AbstractRolesController
{

    /** @test */
    public function superadmin_can_update_a_role()
    {
        $role = Role::create(['name' => 'new_role']);
        $this->actingAsSuperAdminUser();

        $response = $this->put(
            route('roles.update', $role),
            ['name' => 'edited role']
        );

        $this->assertDatabaseHas('roles', ['name' => 'edited role']);
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function authorized_users_can_update_a_role()
    {
        $role = Role::create(['name' => 'new_role']);
        $this->actingAsUserWithPermission('edit roles');

        $response = $this->put(
            route('roles.update', $role),
            ['name' => 'edited role']
        );

        $this->assertDatabaseHas('roles', ['name' => 'edited role']);
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function user_cannot_update_a_role()
    {
        $role = Role::create(['name' => 'new_role']);

        $response = $this->put(
            route('roles.update', $role),
            ['name' => 'edited_role']
        );

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function unauthorized_users_cannot_update_a_role()
    {
        $role = Role::create(['name' => 'new_role']);
        $this->actingAs(User::factory()->create());

        $response = $this->put(
            route('roles.update', $role),
            ['name' => 'edited_rol']
        );

        $response->assertForbidden();
    }

    /** @test */
    public function it_name_must_be_required()
    {
        $role = Role::create(['name' => 'new_role']);
        $this->actingAsSuperAdminUser();

        $response = $this->put(
            route('roles.update', $role),
            ['name' => '']
        );

        $this->assertDatabaseMissing('roles', ['name' => '']);
        $response->assertSessionHasErrors('name', 'required');
    }
}
