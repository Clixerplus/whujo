<?php

namespace Tests\Feature\app\http\livewire\wizard;


use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Category;
use App\Http\Livewire\Wizard\InputCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputCategoryTest extends TestCase
{
    use RefreshDatabase;

    protected $category;

    public function setup(): void
    {
        parent::setup();

        Category::factory()->create();
    }

    /** @test  */
    function it_set_category_attribute()
    {
        Livewire::test(InputCategory::class, ['category' => 1])
            ->assertSet('category', 1);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        Livewire::test(InputCategory::class, ['category' => 1])
            ->call('updatedCategory', 1)
            ->assertEmitted('addAttribute', ['category_id' => 1]);
    }

    /** @test  */
    function category_must_exist()
    {
        Livewire::test(InputCategory::class, ['category' => 2])
            ->call('updatedCategory', 2)
            ->assertHasErrors(['category']);
    }
}
