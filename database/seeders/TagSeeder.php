<?php

namespace Database\Seeders;


use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Tag::create(['name' => 'web']);
        Tag::create(['name' => 'desarrollo web']);
        Tag::create(['name' => 'diseño web']);
        Tag::create(['name' => 'montañismo']);
        Tag::create(['name' => 'alpnismo']);
        Tag::create(['name' => 'aire libre']);
        Tag::create(['name' => 'excursiones']);

    }
}
