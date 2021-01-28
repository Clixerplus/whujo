<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;

class UpdateRouteTest extends AbstractUserController
{

    /** @test */
    public function superadmin_can_update_a_user()
    {
        $this->actingAsSuperAdminUser();
        $user = User::factory()->create();
        $editedData = [
            'name' => 'editedName',
            'email' => $user->email,
        ];

        $response = $this->put(route('users.update', $user), $editedData);

        $this->assertDatabaseHas('users', $editedData);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function user_with_permission_can_update_a_user()
    {
        $this->actingAsUserWithPermission('edit users');
        $user = User::factory()->create();
        $editedData = [
            'name' => 'editedName',
            'email' => $user->email,
        ];

        $response = $this->put(route('users.update', $user), $editedData);

        $this->assertDatabaseHas('users', $editedData);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function guest_cannot_update_a_user()
    {
        $user = User::factory()->create();

        $response = $this->put(
            route('users.update', $user),
            ['name' => 'edited_name']
        );

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function user_without_permission_cannot_update_a_role()
    {
        $user = User::factory()->create();
        $this->actingAs(User::factory()->create());

        $response = $this->put(
            route('users.update', $user),
            ['name' => 'edited_user']
        );

        $response->assertForbidden();
    }

    /** @test */
    public function superadmin_can_update_another_superadmin_user()
    {
        $user = User::factory()->create()->assignRole(config('roles.super_admin'));
        $this->actingAsSuperAdminUser();
        $newData = [
            'name'  => $user->name,
            'email' => $user->email,
            'role'  => Role::create(['name' => 'team'])->name
        ];

        $this->put(route('users.update', $user), $newData);

        $this->assertTrue(User::find($user->id)->hasRole('team'));
        $this->assertNotTrue(User::find($user->id)->isSuperAdmin());
    }

    /** @test */
    public function only_superadmin_user_can_update_another_superadmin_user()
    {
        $user = User::factory()->create()->assignRole(config('roles.super_admin'));
        $this->actingAsUserWithPermission('edit users');
        $newData = [
            'name'  => $user->name,
            'email' => $user->email,
            'role'  => Role::create(['name' => 'team'])->name
        ];

        $response = $this->put(route('users.update', $user), $newData);

        $response->assertForbidden();
        $this->assertTrue(User::find($user->id)->isSuperAdmin());
    }

    /** @dataProvider dataForValidate */
    public function test_it_validates_the_data_before_updating_it(String $key, String $value, String $rule)
    {
        $this->actingAsSuperAdminUser();
        $user = User::factory()->create();

        $response = $this->put(route('users.update', $user), [$key => $value]);

        $response->assertSessionHasErrors($key, $rule);
    }

    public function dataForValidate()
    {
        return [
            "name_must_be_required" => ['name', '', 'required'],
            "name_cant_be_less_than_2" => ['name', 'a', 'between'],
            "name_cant_be_greather_than_30" => ['name', Str::random(31), 'between'],

            "email_must_be_required" => ['email', '', 'required'],
            "email_must_have_a_valid_format" => ['email', 'badformat', 'email'],
            "email_must_be_unique" => ['email', 'superadmin@email.com', 'unique'],

            "role_must_exists_i_database" => ['role', 'no_exists', 'exists'],
        ];
    }
}
