<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Microservice;
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
            ->has(Experience::factory()->blank())
            ->create([
                'name' => 'User Test',
                'email' => 'usuario@email.test'
            ]);

        Category::factory(3)
            ->create();

        Experience::factory(10)->create();

        Service::factory(10)->create();


    }
}

