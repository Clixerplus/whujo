<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Service;
use App\Models\Experience;
use App\Models\ShareACoffee;
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
        Tag::create(['name' => 'web', 'type' => Service::class]);
        Tag::create(['name' => 'desarrollo web', 'type' => Service::class]);
        Tag::create(['name' => 'diseño web', 'type' => Service::class]);
        Tag::create(['name' => 'contable', 'type' => Service::class]);
        Tag::create(['name' => 'desarrollo de aplicaciones', 'type' => Service::class]);
        Tag::create(['name' => 'fontanería', 'type' => Service::class]);
        Tag::create(['name' => 'online', 'type' => Service::class]);
        Tag::create(['name' => 'presencial', 'type' => Service::class]);

        Tag::create(['name' => 'aire libre', 'type' => Experience::class]);
        Tag::create(['name' => 'online', 'type' => Experience::class]);
        Tag::create(['name' => 'presencial', 'type' => Experience::class]);
        Tag::create(['name' => 'grupal', 'type' => Experience::class]);
        Tag::create(['name' => 'individual', 'type' => Experience::class]);
        Tag::create(['name' => 'privado', 'type' => Experience::class]);
        Tag::create(['name' => 'público', 'type' => Experience::class]);

        Tag::create(['name' => 'aire libre', 'type' => ShareACoffee::class]);
        Tag::create(['name' => 'online', 'type' => ShareACoffee::class]);
        Tag::create(['name' => 'presencial', 'type' => ShareACoffee::class]);
        Tag::create(['name' => 'grupal', 'type' => ShareACoffee::class]);
        Tag::create(['name' => 'individual', 'type' => ShareACoffee::class]);
        Tag::create(['name' => 'privado', 'type' => ShareACoffee::class]);
        Tag::create(['name' => 'público', 'type' => ShareACoffee::class]);
    }
}
