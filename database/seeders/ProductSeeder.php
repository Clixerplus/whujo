<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Service;
use App\Models\Experience;
use App\Models\ShareACoffee;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory(100)->related()->hasMicroservices(rand(0, 3))
            ->create()->each(function ($service) {
                $service->attachTag(Tag::where('type', get_class($service))->get()->random());
            });

        Experience::factory(100)->related()->create()->each(function ($experience) {
            $experience->attachTag(Tag::where('type', get_class($experience))->get()->random());
        });

        ShareACoffee::factory(100)->related()->create()->each(function ($shareACoffee) {
            $shareACoffee->attachTag(Tag::where('type', get_class($shareACoffee))->get()->random());
        });
    }
}
