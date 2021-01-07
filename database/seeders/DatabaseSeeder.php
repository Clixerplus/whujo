<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Experience;
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
        User::factory()
            ->create([
                'name' => 'User Test',
                'email' => 'usuario@email.test'
            ]);

        $this->call([
            StateSeeder::class,
            CitySeeder::class,
            LocalitySeeder::class,
        ]);

        Category::factory(3)
                ->create();

        Experience::factory(10)->create();

        Service::factory(10)->create();


    }
}

