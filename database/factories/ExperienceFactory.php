<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use App\Models\City;
use App\Models\Departament;
use App\Models\Experience;
use App\Models\Locality;
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

            'city_id'        => City::factory(),
            'departament_id' => Departament::factory(),
            'locality_id'    => Locality::factory(),
            'address'        => $this->faker->address,

            'name'           => $this->faker->sentence(),
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

<<<<<<< HEAD
            'photos'         => $this->faker->randomElement([
                    "https://images.pexels.com/photos/3760958/pexels-photo-3760958.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                    "https://images.pexels.com/photos/5414000/pexels-photo-5414000.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                    "https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260",
                    "https://images.pexels.com/photos/2040189/pexels-photo-2040189.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
                ]),

            'minimumAge'     => 18,
            'skillLevel'     => config('product.skill_levels')[0],
            'activityLevel'  => config('product.activity_levels')[0],
            'toKnow'         => $this->faker->paragraph(5),
            'groupSize'      => 10,
            'duration'       => $duration->toArray(),
            'starting'       => $this->faker->time(),
            'price'          => 2500,
            'privateGroup'   => true,
            'status'         => true,

            'pricePrivateGroup'    => 15000,
=======
            'photos'        => [
                'portrait' => $this->faker->randomElement([
                    'https://images.pexels.com/photos/3760958/pexels-photo-3760958.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                    'https://images.pexels.com/photos/5414000/pexels-photo-5414000.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                    'https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260',
                    'https://images.pexels.com/photos/2040189/pexels-photo-2040189.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
                ]),

                'portfolio' => [],
            ],
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
>>>>>>> 58093c688040086689882c79276a6225d764890e
            'reservationLimitTime' => $this->faker->randomElement(
                [0, 1, 2, 3, 4, 5, 6, 12, 24, 48, 72]
            ),
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

        $starting = new TimeVO();

        return $this->state(function (array $attributes) use ($duration, $starting) {
            return [
                'name'           => null,
                'city_id'        => null,
                'departament_id' => null,
                'locality_id'    => null,
                'address'        => null,
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
