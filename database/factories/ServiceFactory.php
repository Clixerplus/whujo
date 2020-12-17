<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use App\Models\Category;
use App\Models\Locality;
use App\Models\Service;
use App\Models\Departament;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

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

            'city_id'        => City::factory(),
            'departament_id' => Departament::factory(),
            'locality_id'    => Locality::factory(),
            'address'        => $this->faker->address,

            'name'           => $this->faker->sentence(),
            'description'    => $this->faker->paragraph(5),
            'features'       => [
                                    $this->faker->sentence(3),
                                    $this->faker->sentence(4),
                                    $this->faker->sentence(2)
                                ],
            'price'          => $this->faker->randomFloat(2, 2500, 50000),
            'published_at'   => $this->faker->dateTime(),
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
                'category_id'    => null,
                'city_id'        => null,
                'departament_id' => null,
                'locality_id'    => null,
                'name'           => null,
                'description'    => null,
                'address'        => null,
                'features'       => null,
                'price'          => null,
                'published_at'   => null,
            ];
        });
    }
}
