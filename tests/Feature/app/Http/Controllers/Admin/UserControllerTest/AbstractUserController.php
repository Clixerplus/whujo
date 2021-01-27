<?php

namespace Tests\Feature\app\Http\Controllers\Admin\UserControllerTest;

use Tests\TestCase;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class AbstractUserController extends TestCase
{
    use RefreshDatabase;

    public function setup(): void
    {
        parent::setup();

        //Create roles
        Role::create(['name' => config('roles.super_admin')]);

        //Create permission
        Permission::create(['name' => 'viewAll users'],);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
    }
}
