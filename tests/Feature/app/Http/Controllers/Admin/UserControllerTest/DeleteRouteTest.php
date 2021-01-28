<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;

class DeleteRouteTest extends AbstractUserController
{

    /** @test */
    public function superadmin_can_delete_a_user()
    {
        $user = User::factory()->create();
        $this->actingAsSuperAdminUser();

        $response = $this->delete(route('users.destroy', $user));

        $this->assertDatabaseMissing('users', $user->toArray());
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function user_with_permission_can_delete_a_user()
    {
        $user = User::factory()->create();
        $this->actingAsUserWithPermission('delete users');

        $response = $this->delete(route('users.destroy', $user));

        $this->assertDatabaseMissing('users', $user->toArray());
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function guest_user_cannot_delete_a_user()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('users.destroy', $user));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function user_without_permission_cannot_delete_a_user()
    {
        $user = User::factory()->create();
        $this->actingAs(User::factory()->create());

        $response = $this->delete(route('users.destroy', $user));

        $response->assertForbidden();
    }

    /** @test */
    public function user_cannot_delete_himself()
    {
        $user = User::factory()->create()->givePermissionTo('delete users');
        $this->actingAs($user);

        $response = $this->delete(route('users.destroy', $user));

        $response->assertRedirect()
            ->assertSessionHas('errors');
        $this->assertDatabaseCount('users', 1);
    }

    /** @test */
    public function superadmin_can_delete_another_superadmin_user()
    {
        $otherSuperadmin = User::factory()->create()->assignRole(config('roles.super_admin'));
        $this->actingAsSuperAdminUser();

        $response = $this->delete(route('users.destroy', $otherSuperadmin));

        $response->assertRedirect()
            ->assertSessionHas('success');
        $this->assertDatabaseCount('users', 1);
    }

    /** @test */
    public function only_superadmin_user_can_delete_another_superadmin_user()
    {
        $superadmin = User::factory()->create()->assignRole(config('roles.super_admin'));
        $this->actingAsUserWithPermission('delete users');

        $response = $this->delete(route('users.destroy', $superadmin));

        $response->assertForbidden();
        $this->assertDatabaseCount('users', 2);
    }
}
