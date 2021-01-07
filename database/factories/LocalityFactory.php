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
            'id'   => 'P' . rand(100, 999),
            'city_id' => City::all()->random()->id,
            'name' => $this->faker->streetName,
        ];
    }
}
