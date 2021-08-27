<?php

namespace Database\Seeders;


use App\Models\City;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\Locality;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;


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


        State::factory()->times(5)->create();
        City::factory(5)->related()->create();
        Locality::factory(5)->related()->create();

        User::factory()
            ->create([
                'name' => 'User Test',
                'email' => 'usuario@email.test'
            ])
            ->assignRole($superadmin);


        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
