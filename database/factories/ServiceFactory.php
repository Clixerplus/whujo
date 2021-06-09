<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Service;
use App\Models\Category;
use App\Models\Locality;
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

        $photos = collect([
            'https://images.pexels.com/photos/3825582/pexels-photo-3825582.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'https://images.pexels.com/photos/3825584/pexels-photo-3825584.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'https://images.pexels.com/photos/3825580/pexels-photo-3825580.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            'https://images.pexels.com/photos/3825585/pexels-photo-3825585.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
        ]);

        return [
            'user_id'      => User::factory(),
            'category_id'  => Category::factory(),
            'name'         => $this->faker->sentence(5),
            'description'  => $this->faker->paragraph(5),
            'state_id'     => State::factory(),
            'city_id'      => City::factory(),
            'locality_id'  => Locality::factory(),
            'address'      => $this->faker->address,
            'price'        => rand(25, 999) * 100,
            'modality'     => $this->faker->randomElement(['online', 'onsite']),
            'shareAcoffee' => false,
            'features'     => [
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
            'published_at' => $this->faker->dateTime(),
            'status'       => 'STATUS_PUBLISHED',
        ];
    }

    /**
     * Define the model's blank state.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function blank()
    {
        return $this->state(function (array $attributes) {
            return [
                'category_id'  => null,
                'state_id'     => null,
                'city_id'      => null,
                'locality_id'  => null,
                'name'         => null,
                'description'  => null,
                'address'      => null,
                'features'     => null,
                'price'        => null,
                'photos'       => null,
                'published_at' => null,
                'status'       => 'STATUS_INCOMPLETE',
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
                'category_id'    => Category::where('product_type', $this->model)->get()->random()->id,
                'state_id'    => State::all()->random()->id,
                'city_id'     => City::all()->random()->id,
                'locality_id' => Locality::all()->random()->id,
            ];
        });
    }
}
