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
            'name' => 'Learning',
            'product_type' => Service::class
        ]);


        /** Experience */
        Category::factory()->create([
            'name' => 'Tourism',
            'product_type' => Experience::class
        ]);

        Category::factory()->create([
            'name' => 'Explore',
            'product_type' => Experience::class
        ]);




        /** Share a coffee -> abrierta */
        Category::factory()->create([
            'name' => 'Learning',
            'product_type' => ShareACoffee::class
        ]);

        Category::factory()->create([
            'name' => 'Sharing Experiences',
            'product_type' => ShareACoffee::class
        ]);
    }
}
