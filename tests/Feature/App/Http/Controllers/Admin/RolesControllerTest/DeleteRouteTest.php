<?php

namespace Tests\Feature\App\Http\Controllers\Admin\RolesControllerTest;


use App\Models\User;
use App\Models\Role;

class DeleteRouteTest extends AbstractRolesController
{

    /** @test */
    public function superadmin_can_delete_a_role()
    {
        $role = Role::create(['name' => 'new_role']);
        $this->actingAsSuperAdminUser();

        $response = $this->delete(route('roles.destroy', $role));

        $this->assertDatabaseMissing('roles', $role->toArray());
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function authorized_users_can_delete_a_role()
    {
        $role = Role::create(['name' => 'new_role']);
        $this->actingAsUserWithPermission('delete roles');

        $response = $this->delete(route('roles.destroy', $role));

        $this->assertDatabaseMissing('roles', $role->toArray());
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function guest_user_cannot_delete_a_role()
    {
        $role = Role::create(['name' => 'new_role']);

        $response = $this->delete(route('roles.destroy', $role));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function unauthorized_users_cannot_delete_a_role()
    {
        $role = Role::create(['name' => 'new_role']);
        $this->actingAs(User::factory()->create());

        $response = $this->delete(route('roles.destroy', $role));

        $response->assertForbidden();
    }

    /** @test */
    public function a_role_cannot_delete_itself()
    {
        $role = Role::create(['name' => 'team'])->givePermissionTo('delete roles');
        $user = User::factory()->create()->assignRole($role);
        $this->actingAs($user);

        $response = $this->delete(route('roles.destroy', $role));

        $response->assertRedirect()
            ->assertSessionHas('errors');

        $this->assertDatabaseHas('roles', ['name' => 'team']);
    }
}
