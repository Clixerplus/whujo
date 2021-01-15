<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Microservice;
use Illuminate\Database\Eloquent\Factories\Factory;

class MicroserviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Microservice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => Service::factory(),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(rand(3, 6)),
            'price' => $this->faker->randomFloat(2, 2500, 50000),
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
                'service_id' => Service::all()->random()->id,
            ];
        });
    }
}
