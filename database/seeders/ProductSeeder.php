<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Service;
use App\Models\Experience;
use App\Models\Microservice;
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
        $categories = Category::whereIn('name', Service::CATEGORIES)->get();
        foreach ($categories as $category) {

            $service = Service::factory(20)->related()->create();

            $service->each(function ($service) use ($category) {
                Microservice::factory(rand(0, 3))->related($service)->create();
                $service->category()->associate($category->childs()->random());
                $service->attachTag(Tag::where('type', get_class($service))->get()->random());
            });
        }

        $categories = Category::whereIn('name', Experience::CATEGORIES)->get();
        foreach ($categories as $category) {
            Experience::factory(20)->related()->create()
                ->each(function ($experience) use ($category) {
                    $experience->category()->associate($category->childs()->random());
                    $experience->attachTag(Tag::where('type', get_class($experience))->get()->random());
                });

            ShareACoffee::factory(20)->related()->create()
                ->each(function ($shareACoffee) use ($category) {
                    $shareACoffee->category()->associate($category->childs()->random());
                    $shareACoffee->attachTag(Tag::where('type', get_class($shareACoffee))->get()->random());
                });
        }
    }
}
