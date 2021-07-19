<?php

namespace Tests\Feature\App\Http\Livewire;

use App\Models\Tag;
use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Http\Livewire\SearchProductForm;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;

class SearchProductFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @dataProvider typeProvider
     */
    public function can_get_related_categories($type, $model)
    {
        Category::factory()->create([
            'product_type' => $model,
        ]);

        $categories = Category::where('product_type', $model)->get();

        Livewire::test(SearchProductForm::class)
            ->set('activeType', $type)
            ->assertViewHas('categories', $categories);
    }

    /**
     * @test
     * @dataProvider typeProvider
     */
    public function can_get_related_tags($type, $model)
    {
        Tag::create(['name' => 'Tag', 'type' => $model]);

        $tags = Tag::search('Tag', $model);

        Livewire::test(SearchProductForm::class)
            ->set('search', 'Tag')
            ->set('activeType', $type)
            ->assertViewHas('tags', $tags);
    }

    public function typeProvider()
    {
        return [
            'with Service model' => [0, \App\Models\Service::class],
            'with Experience model' => [1, \App\Models\Experience::class],
            'with ShareACoffee model' => [2, \App\Models\ShareACoffee::class],
        ];
    }
}
