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
        $userData = [
            'name' => 'editedName',
            'password' => Str::random(8),
            'email' => 'otroemail@email.com',
        ];

        $response = $this->put(route('users.update', $user), $userData);

        $this->assertDatabaseHas('users', ['name' => $userData['name']]);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function authorized_users_can_update_a_user()
    {
        $this->actingAsUserWithPermission('edit users');
        $user = User::factory()->create();
        $userData = [
            'name' => 'editedName',
            'password' => Str::random(8),
            'email' => 'otroemail@email.com',
        ];

        $response = $this->put(route('users.update', $user), $userData);

        $this->assertDatabaseHas('users', ['name' => $userData['name']]);
        $response->assertSessionHas('success')
            ->assertRedirect();
    }

    /** @test */
    public function user_cannot_update_a_user()
    {
        $user = User::factory()->create();

        $response = $this->put(
            route('users.update', $user),
            ['name' => 'edited_name']
        );

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function unauthorized_users_cannot_update_a_role()
    {
        $user = User::factory()->create();
        $this->actingAs(User::factory()->create());

        $response = $this->put(
            route('users.update', $user),
            ['name' => 'edited_user']
        );

        $response->assertForbidden();
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

            "password_must_be_required" => ['password', '', 'required'],
            "password_cant_be_less_than_8" => ['password', Str::random(7), 'between'],
            "password_cant_be_greather_than_12" => ['password', Str::random(13), 'between'],

            "role_must_exists_i_database" => ['role', 'no_exist', 'exists'],
        ];
    }
}
