<?php

namespace Tests\Feature\app\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

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
