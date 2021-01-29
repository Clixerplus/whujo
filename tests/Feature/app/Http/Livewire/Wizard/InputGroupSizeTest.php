<?php

namespace Tests\Feature\app\http\livewire\wizrad;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use App\Http\Livewire\Wizard\InputGroupSize;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputGroupSizeTest extends TestCase
{

    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->groupSize = InputGroupSize::MINIMUM_SIZE;

        Livewire::test(InputGroupSize::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.groupSize', $model->groupSize);
    }

    /** @test  */
    function it_groupSize_has_not_error_with_valid_data()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->set('product.groupSize',  InputGroupSize::MINIMUM_SIZE)
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_groupSize_is_required()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->set('product.groupSize',  null)
            ->call('validateData')
            ->assertHasErrors(['product.groupSize' => 'required']);
    }

    /** @test  */
    function it_groupSize_must_be_numeric()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->set('product.groupSize', 'a')
            ->call('validateData')
            ->assertHasErrors(['product.groupSize' => 'numeric']);
    }

    /** @test  */
    function it_groupSize_must_have_a_minimum()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->set('product.groupSize',  InputGroupSize::MINIMUM_SIZE - 1)
            ->call('validateData')
            ->assertHasErrors(['product.groupSize' => 'between']);
    }

    /** @test  */
    function it_groupSize_must_have_a_maximum()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->set('product.groupSize',  InputGroupSize::MAXIMUM_SIZE + 1)
            ->call('validateData')
            ->assertHasErrors(['product.groupSize' => 'between']);
    }

    /** @test  */
    function it_groupSize_save_on_experience_model()
    {
        Experience::factory()->create(['groupSize' => InputGroupSize::MINIMUM_SIZE]);
        $experience = Experience::first(['id', 'groupSize']);
        $newGroupSize = InputGroupSize::MAXIMUM_SIZE;

        Livewire::test(InputGroupSize::class, ['model' => $experience])
            ->set('product.groupSize', $newGroupSize)
            ->call('save');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'groupSize' => $newGroupSize
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.groupSize"')
            ->assertSeeHtml('wire:model="product.groupSize"');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->set('product.groupSize',  InputGroupSize::MINIMUM_SIZE)
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }

    /** @test */
    function it_listen_for_step_change_request_and_rejects_it()
    {
        Livewire::test(InputGroupSize::class, ['model' => new ProductModelTest])
            ->emit('canChangeStep')
            ->assertNotEmitted('dataIsValid');
    }
}
