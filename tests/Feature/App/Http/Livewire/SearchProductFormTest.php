<?php

namespace Tests\Feature\App\Http\Livewire;

use App\Models\Tag;
use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Http\Livewire\SearchProductForm;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchProductFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @dataProvider productTypeProvider
     */
    public function it_can_search_by_each_product_type($productType)
    {
        $this->createTags(['webdesign', 'app web', 'web'], $productType);

        Livewire::test(SearchProductForm::class)
            ->set('tabActive', 0)
            ->set('search', 'web')
            ->assertSet('results', ['web', 'webdesign', 'app web']);
    }

    public function productTypeProvider()
    {
        return [
            'with Service type' => [Service::class],
            'with Experience type' => [Experience::class],
            'with Share a coffee type' => [ShareACoffee::class],
        ];
    }

    private function createTags(array $names, $type)
    {
        foreach ($names as $name) {
            Tag::factory()->create(['name' => $name, 'type' => $type]);
        }
    }
}
