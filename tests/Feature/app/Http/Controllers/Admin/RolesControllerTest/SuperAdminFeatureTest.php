<?php

namespace Tests\Feature\app\Http\Controllers\Admin\RolesControllerTest;


use App\Models\User;
use App\Models\Role;

class SuperAdminFeatureTest extends AbstractRolesController
{
    /** @test */
    public function superadmin_role_cannot_be_delete()
    {
        $superAdminRole = Role::where('name', config('roles.super_admin'))->first();
        $this->actingAsUserWithPermission('delete roles');

        $response = $this->delete(route('roles.destroy', $superAdminRole));

        $response->assertForbidden();
        $this->assertDatabaseHas('roles', ['name' => config('roles.super_admin')]);
    }

    /** @test */
    public function superadmin_role_cannot_be_update()
    {
        $superAdminRole = Role::where('name', config('roles.super_admin'))->first();
        $this->actingAsUserWithPermission('edit roles');

        $response = $this->put(route('roles.update', $superAdminRole));

        $response->assertForbidden();
    }
}
