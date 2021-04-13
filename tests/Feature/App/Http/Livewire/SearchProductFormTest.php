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

    /** @test */
    public function it_can_search_by_tags()
    {
        $this->createTags(['web', 'web development', 'mobile development'], Service::class);

        Livewire::test(SearchProductForm::class)
            ->set('search', 'web')
            ->set('active', true)
            ->assertSee('web')
            ->assertSee('web development')
            ->assertDontSee('mobile development');
    }

    /** @test */
    public function it_can_pick_a_result()
    {
        $this->createTags(['web', 'web development', 'mobile development'], Service::class);

        Livewire::test(SearchProductForm::class)
            ->set('search', 'web')
            ->set('active', true)
            ->assertSee('web development')
            ->call('pickResult', 'web development')
            ->assertSet('search', 'web development')
            ->assertSet('results', [])
            ->set('active', false);
    }

    private function createTags(array $names, $type)
    {
        foreach ($names as $name) {
            Tag::factory()->create(['name' => $name, 'type' => $type]);
        }
    }
}
