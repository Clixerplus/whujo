<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Tests\Feature\app\Http\Controllers\Admin\UserControllerTest\AbstractUserController;

class StoreRouteTest extends AbstractUserController
{

    /** @test */
    public function superadmin_can_create_a_new_user()
    {
        $this->actingAsSuperAdminUser();
        $userData = User::factory()
            ->make(['password' => Str::random(8)])
            ->only('name', 'email', 'password');
        $userData = array_merge($userData, ['role' => Role::first()->id]);

        $response = $this->post(route('users.store'), $userData);

        $this->assertDatabaseCount('users', 2);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function authorized_users_can_create_a_new_user()
    {
        $this->actingAsUserWithPermission('create users');
        $userData = User::factory()
            ->make(['password' => Str::random(8)])
            ->only('name', 'email', 'password');

        $response = $this->post(route('users.store'), $userData);

        $this->assertDatabaseCount('users', 2);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function user_cannot_create_a_user()
    {
        $user = User::factory()->make();

        $response = $this->post(route('users.store'), $user->toArray());

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function unauthorized_users_cannot_create_a_user()
    {
        $user = User::factory()->make();
        $this->actingAs(User::factory()->create());

        $response = $this->post(route('users.store'), $user->toArray());

        $response->assertForbidden();
    }

    /** @dataProvider dataForValidate */
    public function test_it_validates_the_data_before_storing_it(String $key, String $value, String $rule)
    {
        $this->actingAsSuperAdminUser();

        $response = $this->post(route('users.store', [$key => $value]));

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

            "password_must_be_required" => ['password', '', 'required'],
            "password_cant_be_less_than_8" => ['password', Str::random(7), 'between'],
            "password_cant_be_greather_than_12" => ['password', Str::random(13), 'between'],

            "role_must_exists_i_database" => ['role', 'no_exist', 'exists'],
        ];
    }
}
