<?php

namespace Database\Seeders;

use App\Models\City;
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
        User::factory()
            ->create([
                'name' => 'User Test',
                'email' => 'usuario@email.test'
            ]);

        /*  $this->call([
            StateSeeder::class,
            CitySeeder::class,
            LocalitySeeder::class,
        ]);*/
        Category::factory(3)
            ->create();

        State::factory(10)
            ->create();

        City::factory(10)
            ->related()
            ->create();

        Locality::factory(10)
            ->related()
            ->create();

        Experience::factory(10)
            ->related()
            ->create();

        Service::factory(10)
            ->related()
            ->hasMicroservices(5)
            ->create();
    }
}
