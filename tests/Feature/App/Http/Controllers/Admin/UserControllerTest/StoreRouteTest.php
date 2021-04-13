<?php

namespace Tests\Feature\App\Http\Controllers\Admin\UserControllerTest;


use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;

class StoreRouteTest extends AbstractUserController
{

    private function prepareUserData(): array
    {
        return [
            'name'  => 'User Name',
            'email' => 'email@dominio.com',
            'role'  => Role::create(['name' => 'team'])->id
        ];
    }

    /** @test */
    public function superadmin_can_create_a_new_user()
    {

        $this->actingAsSuperAdminUser();
        $newUserData = $this->prepareUserData();

        $response = $this->post(route('users.store'), $newUserData);

        $this->assertDatabaseCount('users', 2);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function user_with_permission_can_create_a_new_user()
    {
        $this->actingAsUserWithPermission('create users');
        $newUserData = $this->prepareUserData();

        $response = $this->post(route('users.store'), $newUserData);

        $this->assertDatabaseCount('users', 2);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function guest_cannot_create_a_user()
    {
        $newUserData = $this->prepareUserData();

        $response = $this->post(route('users.store'), $newUserData);

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function users_without_permission_cannot_create_a_user()
    {
        $newUserData = $this->prepareUserData();
        $this->actingAs(User::factory()->create());

        $response = $this->post(route('users.store'), $newUserData);

        $response->assertForbidden();
    }

    /** @dataProvider dataForValidate */
    public function test_it_validates_the_data_before_storing_it(String $key, String $value, String $rule)
    {
        $this->actingAsSuperAdminUser();

        $response = $this->post(route('users.store', [$key => $value]));

        $response->assertSessionHasErrors($key, $rule);
    }

    /** @test */
    public function superadmin_can_create_another_superadmin_user()
    {
        $this->actingAsSuperAdminUser();
        $superadminUser = [
            'name'  => 'User Name',
            'email' => 'email@dominio.com',
            'role'  => Role::where('name', config('roles.super_admin'))->first()->id
        ];

        $response = $this->post(route('users.store', $superadminUser));

        $this->assertDatabaseCount('users', 2);
    }

    /** @test */
    public function only_superadmin_user_can_create_another_superadmin_user()
    {
        $this->actingAsUserWithPermission('create users');
        $superadmin = [
            'name'  => 'User Name',
            'email' => 'email@dominio.com',
            'role'  => Role::where('name', config('roles.super_admin'))->first()->id
        ];

        $response = $this->post(route('users.store', $superadmin));

        $response->assertForbidden();
        $this->assertDatabaseCount('users', 1);
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

            "role_must_exists_i_database" => ['role', 'no_exist', 'exists'],
        ];
    }
}
