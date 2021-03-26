<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\Service;
use App\Models\Category;
use App\Models\Locality;
use App\Models\Experience;
use App\Models\Microservice;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\StateSeeder;
use Database\Seeders\LocalitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::create(['name' => config('roles.super_admin')]);
        User::factory()
            ->create([
                'name' => 'User Test',
                'email' => 'usuario@email.test'
            ])->assignRole($superadmin);

        /*  $this->call([
            StateSeeder::class,
            CitySeeder::class,
            LocalitySeeder::class,
        ]);*/
        Category::factory(6)
            ->create();

        State::factory(10)
            ->create();

        City::factory(10)
            ->related()
            ->create();

        Locality::factory(10)
            ->related()
            ->create();

        Experience::factory(25)
            ->related()
            ->create();

        Service::factory(25)
            ->related()
            ->hasMicroservices(rand(0,3))
            ->create();
    }
}
