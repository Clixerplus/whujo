<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Locality;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalityFactory extends Factory
{

    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Locality::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'   => $this->faker->randomElement(['A','B','C']) . rand(1000, 9999),
            'city_id' => City::factory(),
            'name' => $this->faker->streetName,
        ];
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
                'city_id' => City::all()->random()->id,
            ];
        });
    }
}
