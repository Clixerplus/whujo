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
            'price' => rand(25, 999) * 100,
        ];
    }

    /**
     * Define the model's related state.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function related($service = null)
    {
        return $this->state(function (array $attributes) use ($service) {
            return [
                'service_id' => $service?->id ?? Service::all()->random()->id,
            ];
        });
    }
}
