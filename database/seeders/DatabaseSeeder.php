<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\User;
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
    }
}
