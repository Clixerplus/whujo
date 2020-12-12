<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\Experience;
use App\ValueObjcets\TimeVO;
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
        $duration = new TimeVO(rand(0, 16));

        $duration = new TimeVO(rand(8, 18), 30);

        return [
            'user_id'        => User::factory(),
            'category_id'    => Category::factory(),
            'name'           => $this->faker->sentence(),
            // 'location'      => $this->faker->address,
            'toDo'           => $this->faker->paragraph(5),
            'toProvide'      => [
                $this->faker->sentence(8),
                $this->faker->sentence(12)
            ],
            'toBring'        => [
                $this->faker->sentence(3),
                $this->faker->sentence(4),
                $this->faker->sentence(2)
            ],
            'photos'        => $this->faker->imageUrl(300, 300),
            'minimumAge'    => 18,
            'skillLevel'    => config('product.skill_levels')[0],
            'activityLevel' => config('product.activity_levels')[0],
            'toKnow'        => $this->faker->paragraph(5),
            'groupSize'     => 10,
            'duration'      => $duration->toArray(),
            'starting'      => $this->faker->time(),
            'price'         => 2500,
            'privateGroup'  => true,
            'pricePrivateGroup'  => 15000,
            'reservationLimitTime' => $this->faker->randomElement(
                [0, 1, 2, 3, 4, 5, 6, 12, 24, 48, 72]
            ),
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
        $duration = new TimeVO();

        $starting = new TimeVO(8, 30);

        return $this->state(function (array $attributes) use ($duration, $starting) {
            return [
                'name'           => null,
                'location'       => null,
                'toDo'           => null,
                'toProvide'      => [],
                'toBring'        => [],
                'photos'         => null,
                'minimumAge'     => null,
                'skillLevel'     => null,
                'activityLevel'  => null,
                'toKnow'         => null,
                'groupSize'      => null,
                'duration'       => $duration,
                'starting'       => $starting,
                'price'          => null,
                'privateGroup'   => false,
                'status'         => false,
                'pricePrivateGroup'  => null,
                'reservationLimitTime' => 0,
            ];
        });
    }
}
