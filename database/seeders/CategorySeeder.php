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
        $categories = [
            'Professional/Occupations' => [
                'Accounting',
                'Design',
                'Photography',
                'Analysis',
                'Architecture',
                'Teaching',
                'Hairdresser',
                'Manicurist',
                'Painter',
                'Bricklayer',
                'Repair',
                'Baby Sister',
                'Cleaning Staff'
            ],
            'Lifestyle' => [
                'Trainer',
                'Yoga classes',
                'Art Lessons',
                'Meditation',
                'Astrology'
            ],
            'Thematic' => [
                'Culture, Society and Science',
                'Entertainment',
                'History and Literature',
                'Art and Design',
                'Gastronomy (Food and Drink)',
                'Nature, Open Spaces and Animals',
                'Sports',
                'Wellness',
                'Surprise yourself'
            ]
        ];

        foreach ($categories as $parent => $childs) {
            $category = Category::factory()->create([
                'name' => $parent
            ]);

            foreach ($childs as $child) {
                Category::factory()->childOf($category)->create([
                    'name' => $child,
                ]);
            }
        }
    }
}
