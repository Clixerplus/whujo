<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\Experience;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'        => User::factory(),
            'category_id'    => Category::factory(),
            'name'           => $this->faker->sentence(),
            // 'location'      => $this->faker->address,
            'todo'           => $this->faker->paragraph(5),
            'toProvide'      => [
                $this->faker->sentence(8),
                $this->faker->sentence(12)
            ],
            'toBring'        => [
                $this->faker->sentence(3),
                $this->faker->sentence(4),
                $this->faker->sentence(2)
            ],
            'photos'         => $this->faker->imageUrl(300, 300),
            'minimum_age'    => 18,
            'skill_level'    => config('product.skill_levels')[0],
            'activity_level' => config('product.activity_levels')[0],
            'to_know'        => $this->faker->paragraph(5),
            'group_size'     => 10,
            'duration'       => $this->faker->time,
            'starting'       => $this->faker->time(),
            'price'          => 2500,
            'private_group'  => true,
            'price_private_group' => 15000,
            'reservation_limit_time' => $this->faker->time(),
            'status'        => true,
        ];
    }

    /**
     * Indicate that the user is suspended.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function blank()
    {
        return $this->state(function (array $attributes) {
            return [
                'name'           => null,
                'location'       => null,
                'todo'           => null,
                'toProvide'      => [],
                'toBring'        => [],
                'photos'         => null,
                'minimum_age'    => null,
                'skill_level'    => null,
                'activity_level' => null,
                'to_know'        => null,
                'group_size'     => null,
                'duration'       => null,
                'starting'       => null,
                'price'          => null,
                'private_group'  => false,
                'status'         => false,
                'price_private_group' => null,
                'reservation_limit_time' => null,
            ];
        });
    }
}
