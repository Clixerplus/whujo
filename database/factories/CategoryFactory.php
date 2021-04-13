<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Category;
use App\Models\Experience;
use App\Models\ShareACoffee;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_type = ($this->faker->randomElement([Experience::class, Service::class, ShareACoffee::class]));
        
        return [
            'name' => $this->faker->sentence(2),
            'product_type' => $product_type,

        ];
    }
}
