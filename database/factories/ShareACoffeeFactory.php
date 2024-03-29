<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Category;
use App\Models\Locality;
use App\Models\ShareAcoffee;
use App\ValueObjcets\TimeVO;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShareACoffeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShareAcoffee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $photos = collect([
            'https://images.pexels.com/photos/3760958/pexels-photo-3760958.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'https://images.pexels.com/photos/5414000/pexels-photo-5414000.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
            'https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260',
            'https://images.pexels.com/photos/2040189/pexels-photo-2040189.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940',
        ]);

        return [
            'user_id'        => User::factory(),
            'category_id'    => Category::factory(),

            'state_id'       => State::factory(),
            'city_id'        => City::factory(),
            'locality_id'    => Locality::factory(),
            //zipcode -------------------------------
            'address'        => $this->faker->address,

            'name'           => $this->faker->sentence(5),
            'description'    => $this->faker->paragraph(5),

            'toProvide'      => [
                $this->faker->sentence(8),
                $this->faker->sentence(12)
            ],

            'toBring'        => [
                $this->faker->sentence(3),
                $this->faker->sentence(4),
                $this->faker->sentence(2)
            ],

            'photos'         =>  [
                $photos->random(),
                $photos->random(),
                $photos->random(),
                $photos->random(),
            ],

            'minimumAge'     => 18,
            'skillLevel'     => 'SKILL_LVL_BEGINNER',
            'activityLevel'  => 'ACTIVITY_LVL_LIGHT',
            'toKnow'         => $this->faker->paragraph(5),
            'groupSize'      => 10,
            'duration'       => new TimeVO(rand(0, 16)),
            'starting'       => new TimeVO(rand(8, 18), 30),
            'price'          => rand(25, 999) * 100,
            'privateGroup'   => true,
            'status'         => 'STATUS_PUBLISHED',
            'modality'       => $this->faker->randomElement(['online', 'onsite']),
            'shareACoffee'   => true,
            'privateGroupPrice'    => 15000,
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
        return $this->state(function (array $attributes) {
            return [
                'name'          => null,
                'state_id'      => '',
                'city_id'       => '',
                'locality_id'   => '',
                'address'       => null,
                'description'   => null,
                'toProvide'     => [],
                'toBring'       => [],
                'photos'        => null,
                'minimumAge'    => null,
                'skillLevel'    => 'SKILL_LVL_EXPERT',
                'activityLevel' => 'ACTIVITY_LVL_MODERATE',
                'toKnow'        => null,
                'groupSize'     => null,
                'duration'      => new TimeVO(),
                'starting'      => new TimeVO(),
                'price'         => null,
                'shareACoffee'  => false,
                'privateGroup'  => false,
                'status'        => 'STATUS_INCOMPLETE',
                'privateGroupPrice'    => null,
                'reservationLimitTime' => 0,
            ];
        });
    }

    /**
     * Define the model's related state.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function related()
    {
        return $this->state(function (array $attributes) {
            return [
                'category_id'    => Category::whereIn('name', $this->model::CATEGORIES)->get()->random()->childs()->random()->id,
                'state_id'       => State::all()->random()->id,
                'city_id'        => City::all()->random()->id,
                'locality_id'    => Locality::all()->random()->id,
            ];
        });
    }
}
