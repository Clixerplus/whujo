<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'   => $this->faker->randomElement(['A', 'B', 'C']) . rand(1000, 9999),
            'state_id' => State::factory(),
            'name' => $this->faker->city,
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
                'state_id' => State::all()->random()->id,
            ];
        });
    }
}
