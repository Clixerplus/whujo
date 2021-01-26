<?php

namespace Tests\Feature\app\Http\Controllers\Admin\RolesControllerTest;

use Tests\TestCase;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class AbstractRolesController extends TestCase
{
    use RefreshDatabase;

    public function setup(): void
    {
        parent::setup();

        //Create roles
        Role::create(['name' => config('roles.super_admin')]);

        //Create permission
        Permission::create(['name' => 'viewAll roles'],);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'edit roles']);
        Permission::create(['name' => 'delete roles']);
    }
}
