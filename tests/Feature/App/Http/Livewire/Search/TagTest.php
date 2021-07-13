<?php

namespace Tests\Feature\App\Http\Livewire\Search;

use App\Http\Livewire\Search\Tag;
use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Tag as TagModel;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @dataProvider typeProvider
     */
    public function can_get_related_categories($type, $model)
    {
        TagModel::create(['name' => 'Tag', 'type' => $model]);
        TagModel::create(['name' => 'Other Tag', 'type' => 'WrongModel']);

        $tags = TagModel::search('Tag', $model);

        Livewire::test(Tag::class, ['type' => $type])
            ->set('search', 'Tag')
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

    private function getTags()
    {
    }
}
