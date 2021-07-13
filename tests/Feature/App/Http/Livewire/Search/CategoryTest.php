<?php

namespace Tests\Feature\App\Http\Livewire\Search;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Search\Category;
use App\Models\Category as CategoryModel;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @dataProvider typeProvider
     */
    public function can_get_related_categories($type, $model)
    {
        CategoryModel::factory()->create([
            'product_type' => $model,
        ]);

        $categories = CategoryModel::where('product_type', $model)->get();

        Livewire::test(Category::class, ['type' => $type])
            ->assertViewHas('categories', $categories);
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
