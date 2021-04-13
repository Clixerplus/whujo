<?php

namespace Tests\Feature\App\Http\Controllers\Site;

use Tests\TestCase;
use App\Models\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_an_existing_route()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_has_a_existing_named_route()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }

    /** @test */
    public function it_has_a_view()
    {
        $response = $this->get(route('home'));

        $response->assertViewIs('site.home');
    }

    /** @test */
    public function it_has_a_collection_of_category_to_show()
    {
        Category::factory()->create();
        $response = $this->get(route('home'));

        $response->assertViewHas('categories', Category::onlyActive());
    }
}
