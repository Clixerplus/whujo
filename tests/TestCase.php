<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function actingAsSuperAdminUser()
    {
        return $this->actingAs(
            User::factory()
                ->create(['email' => 'superadmin@email.com'])
                ->assignRole(config('roles.super_admin'))
        );
    }

    public function actingAsUserWithPermission($permision)
    {
        return $this->actingAs(
            User::factory()
                ->create()
                ->givePermissionTo($permision)
        );
    }
}
