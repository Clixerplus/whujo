<?php

namespace Tests\Feature\app\Http\Controllers\Admin\RolesControllerTest;


use App\Models\User;

class StoreRouteTest extends AbstractRolesController
{

    /** @test */
    public function superadmin_can_create_a_new_role()
    {
        $role = ['name' => 'new_role'];
        $this->actingAsSuperAdminUser();

        $response = $this->post(route('roles.store'), $role);

        $this->assertDatabaseHas('roles', $role);
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function authorized_users_can_create_a_new_role()
    {
        $role = ['name' => 'new_role'];
        $this->actingAsUserWithPermission('create roles');

        $response = $this->post(route('roles.store'), $role);

        $this->assertDatabaseHas('roles', $role);
        $response->assertRedirect()
            ->assertSessionHas('success');
    }

    /** @test */
    public function user_cannot_create_a_role()
    {
        $request = ['name' => 'new role'];

        $response = $this->post(route('roles.store'), $request);

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function unauthorized_users_cannot_create_a_role()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->post(route('roles.store'), ['name' => 'new role']);

        $response->assertForbidden();
    }

    /** @test */
    public function it_name_must_be_required()
    {
        $this->actingAsSuperAdminUser();

        $response = $this->post(route('roles.store', ['name' => '']));

        $response->assertSessionHasErrors('name', 'required');
        $this->assertDatabaseMissing('roles', ['name' => '']);
    }
}
