<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;


use App\Models\User;

class IndexRouteTest extends AbstractUserController
{

    /** @test */
    public function superadmin_can_access_to_see_a_list_of_users()
    {
        $this->actingAsSuperAdminUser();

        $response = $this->get(route('users.index'));

        $response->assertSuccessful();
    }

    /** @test */
    public function user_with_permission_can_access_to_see_a_list_of_users()
    {
        $this->actingAsUserWithPermission('viewAll users');

        $response = $this->get(route('users.index'));

        $response->assertSuccessful();
    }

    /** @test */
    public function guest_cannot_access_to_see_a_list_of_users()
    {
        $response = $this->get(route('users.index'));

        $response->assertRedirect(route('login'));
    }

    /** @test */
    public function user_without_permission_can_access_to_see_a_list_of_users()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('users.index'));

        $response->assertForbidden();
    }
}
