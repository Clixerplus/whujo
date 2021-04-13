<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\City;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\Service;
use App\Models\Locality;
use App\Models\Experience;
use App\Models\ShareACoffee;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;


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

        $this->call([
            CategorySeeder::class,
            TagSeeder::class
        ]);

        State::factory()->times(10)->create();

        City::factory(10)->related()->create();

        Locality::factory(10)->related()->create();

        Service::factory(100)->related()->hasMicroservices(rand(0, 3))
            ->create()->each(function ($service) {
                $service->attachTag(Tag::where('type', get_class($service))->get()->random());
            });

        Experience::factory(100)->related()->create()->each(function ($experience) {
            $experience->attachTag(Tag::where('type', get_class($experience))->get()->random());
        });

        ShareACoffee::factory(100)->related()->create()->each(function ($shareACoffee) {
            $shareACoffee->attachTag(Tag::where('type', get_class($shareACoffee))->get()->random());
        });
    }
}
