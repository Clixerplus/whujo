<?php

namespace Tests\Feature\App\Http\Controllers\Admin;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Service;
use App\Models\Experience;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_show_a_list_of_categories_access_only_for_admin()
    {
        $response = $this->get(route('categories.index'));

        $response->assertStatus(200);
    }


    public function test_algo()
    {
        $this->withoutExceptionHandling();
        Tag::factory()->create(['name' => 'web']);
        Tag::factory()->create(['name' => 'desarrollo web']);
        Tag::factory()->create(['name' => 'diseño web']);
        Tag::factory()->create(['name' => 'montañismo']);
        Tag::factory()->create(['name' => 'alpnismo']);
        Tag::factory()->create(['name' => 'aire libre']);
        Tag::factory()->create(['name' => 'excursiones']);
        $tag = Tag::all()->random();
        $serv = Service::factory()->create()->attachTag($tag);
    }
}
