<?php

namespace Tests\Feature\app\http\livewire\wizard;


use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Category;
use App\Models\Experience;
use App\Http\Livewire\Wizard\InputCategory;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->category_id = 1;

        Livewire::test(InputCategory::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.category_id', $model->category_id);
    }

    /** @test  */
    function it_category_has_no_error_with_valid_data()
    {
        Category::factory()->create();

        Livewire::test(InputCategory::class, ['model' => new ProductModelTest])
            ->set('product.category_id', 1)
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_category_must_exist()
    {
        Category::factory()->create();

        Livewire::test(InputCategory::class, ['model' => new ProductModelTest])
            ->set('product.category_id', 2)
            ->call('validateData')
            ->assertHasErrors(['product.category_id' => 'exists']);
    }

    /** @test  */
    function it_category_save_on_service_model()
    {
        Service::factory()->create();
        $service = Service::first(['id','category_id']);
        $newCategory = Category::factory()->create();

        Livewire::test(InputCategory::class, ['model' => $service])
            ->set('product.category_id', $newCategory->id)
            ->call('save');

        $this->assertDatabaseHas(
            'services',
            [
                'id' => $service->id,
                'category_id' => $newCategory->id
            ]
        );
    }

    /** @test  */
    function it_category_save_on_experience_model()
    {
        Experience::factory()->create();
        $experience = Experience::first(['id','category_id']);
        $newCategory = Category::factory()->create();

        Livewire::test(InputCategory::class, ['model' => $experience])
            ->set('product.category_id', $newCategory->id)
            ->call('save');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'category_id' => $newCategory->id
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputCategory::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.category_id"')
            ->assertSeeHtml('wire:model="product.category_id"');
    }
}
