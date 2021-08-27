<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            'name' => $this->faker->sentence(2)
        ];
    }

    public function childOf(Category $parent)
    {
        return $this->state(function (array $attr) use ($parent) {
            return [
                'parent_id' => $parent->id
            ];
        });
    }

    public function deactivate()
    {
        return $this->state(function (array $attr) {
            return [
                'active' => false
            ];
        });
    }
}
