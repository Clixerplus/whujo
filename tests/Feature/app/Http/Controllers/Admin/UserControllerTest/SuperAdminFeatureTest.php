<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Tests\Feature\app\Http\Controllers\Admin\UserControllerTest\AbstractUserController;

class SuperAdminFeatureTest extends AbstractUserController
{
    /** @test */
    public function superadmin_role_can_remove_for_a_superadmin_user()
    {
        $role = Role::create(['name' => 'User']);
        $user = User::factory()->create(['password' => Str::random(8)]);
        $user->assignRole(config('roles.super_admin'));
        $this->actingAsSuperAdminUser();

        $response = $this->put(
            route('users.update', $user),
            [
                'name' => 'Namesd',
                'password' => '123456789',
                'email' => 'easdk@asas.com',
                'role' => 2,
            ]
        );

        $response->assertRedirect()->assertSessionHas('success');
    }

    /** @test */
    public function superadmin_role_can_remove_only_for_a_superadmin_user()
    {
        $role = Role::create(['name' => 'User']);
        $user = User::factory()->create(['password' => Str::random(8)]);
        $user->assignRole(config('roles.super_admin'));
        $this->actingAsUserWithPermission('edit users');

        $response = $this->put(
            route('users.update', $user),
            [
                'name' => 'Namesd',
                'password' => '123456789',
                'email' => 'easdk@asas.com',
                'role' => $role->id,
            ]
        );

        $response->assertForbidden();
    }

    /** @test */
    public function superadmin_role_can_create_a_superadmin_user()
    {
        $this->actingAsSuperAdminUser();

        $response = $this->post(
            route('users.store'),
            [
                'name' => 'Name',
                'password' => '123456789',
                'email' => 'newsuper@email.com',
                'role' => 1,
            ]
        );

        $response->assertRedirect()->assertSessionHas('success');
        $this->assertTrue(User::find(2)->isSuperAdmin());
    }

    /** @test */
    public function only_superadmin_role_can_create_a_superadmin_user()
    {
        $this->actingAsUserWithPermission('create users');

        $response = $this->post(
            route('users.store'),
            [
                'name' => 'Name',
                'password' => '123456789',
                'email' => 'newsuper@email.com',
                'role' => 1,
            ]
        );

        $response->assertForbidden();
    }

    /** @test */
    public function only_superadmin_role_can_delete_a_superadmin_user()
    {
        $user = User::factory()->create()->assignRole(config('roles.super_admin'));
        $this->actingAsUserWithPermission('delete users');

        $response = $this->delete(route('users.destroy', $user));

        $response->assertForbidden();
    }

    /** @test */
    public function only_user_with_superadmin_role_can_update_a_user_as_a_superadmin()
    {
        $role = Role::create(['name' => 'user']);
        $user = User::factory()->create();
        $user->assignRole($role);
        $this->actingAsUserWithPermission('edit users');

        $response = $this->put(
            route('users.update', $user),
            [
                'name' => 'Name',
                'password' => '123456789',
                'email' => 'new@superadmin.com',
                'role' => 1,
            ]
        );

        $response->assertForbidden();
    }

    /** @test */
    public function user_with_superadmin_role_can_update_a_user_as_a_superadmin()
    {
        $role = Role::create(['name' => 'user']);
        $user = User::factory()->create();
        $user->assignRole($role);
        $this->actingAsSuperAdminUser();

        $response = $this->put(
            route('users.update', $user),
            [
                'name' => 'Name',
                'password' => '123456789',
                'email' => 'new@superadmin.com',
                'role' => 1,
            ]
        );

        $response->assertRedirect()->assertSessionHas('success');
    }
}
