<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Category;
use App\Models\Experience;
use App\Models\ShareACoffee;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Service */
        Category::factory()->create([
            'name' => 'Professional',
            'product_type' => Service::class
        ]);

        Category::factory()->create([
            'name' => 'Make it easy',
            'product_type' => Service::class
        ]);

        Category::factory()->create([
            'name' => 'Aprendizaje',
            'product_type' => Service::class
        ]);


        /** Experience */
        Category::factory()->create([
            'name' => 'Turismo',
            'product_type' => Experience::class
        ]);

        Category::factory()->create([
            'name' => 'Descubre',
            'product_type' => Experience::class
        ]);




        /** Share a coffee -> abrierta */
        Category::factory()->create([
            'name' => 'Aprendizaje',
            'product_type' => ShareACoffee::class
        ]);

        Category::factory()->create([
            'name' => 'Comparte un momento',
            'product_type' => ShareACoffee::class
        ]);
    }
}
