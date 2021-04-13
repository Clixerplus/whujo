<?php

namespace Tests\Feature\App\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use Tests\Feature\MockClass\ProductModelTest;
use App\Http\Livewire\Wizard\InputPrivateGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputPrivateGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->privateGroup = true;
        $model->privateGroupPrice = 5000;

        Livewire::test(InputPrivateGroup::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.privateGroup', true)
            ->assertSet('product.privateGroupPrice', 5000);
    }

    /** @test */
    function it_no_errors_with_valid_data()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->set('product.privateGroup', true)
            ->set('product.privateGroupPrice', InputPrivateGroup::MINIMUN_PRICE + 1)
            ->call('validateData')
            ->assertSet('product.privateGroup', true)
            ->assertSet('product.privateGroupPrice', InputPrivateGroup::MINIMUN_PRICE + 1)
            ->assertHasNoErrors(['product.privateGroup', 'product . privateGroup']);
    }

    /** @test  */
    function it_privateGroup_is_required()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->set('product.privateGroup', '')
            ->call('validateData')
            ->assertHasErrors(['product.privateGroup' => 'required']);
    }

    /** @test  */
    function it_privateGroup_is_boolean()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->set('product.privateGroup', 'string')
            ->call('validateData')
            ->assertHasErrors(['product.privateGroup' => 'boolean'])
            ->set('product.privateGroup', 4)
            ->call('validateData')
            ->assertHasErrors(['product.privateGroup' => 'boolean']);
    }

    /** @test  */
    function it_privateGroup_is_required_if_privateGroupPrice_is_true()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->set('product.privateGroup', true)
            ->set('product.privateGroupPrice', '')
            ->call('validateData')
            ->assertHasErrors(['product.privateGroupPrice' => 'required_if']);
    }

    /** @test */
    function it_privateGroupPrice_is_numeric()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->set('product.privateGroup', true)
            ->set('product.privateGroupPrice', 'string')
            ->call('validateData')
            ->assertHasErrors(['product.privateGroupPrice' => 'numeric']);
    }

    /** @test */
    function it_privateGroupPrice_is_greater_than_minimun_price_established()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->set('product.privateGroup', true)
            ->set('product.privateGroupPrice', InputPrivateGroup::MINIMUN_PRICE - 1)
            ->call('save')
            ->assertHasErrors(['product.privateGroupPrice' => 'min']);
    }

    /** @test  */
    function it_name_save_on_experience_model()
    {
        Experience::factory()->create([
            'privateGroup' => false,
            'privateGroupPrice' => 0,
        ]);

        $experience = Experience::first(['id', 'privateGroup', 'privateGroupPrice']);

        Livewire::test(InputPrivateGroup::class, ['model' => $experience])
            ->set('product.privateGroup', true)
            ->set('product.privateGroupPrice', InputPrivateGroup::MINIMUN_PRICE + 1)
            ->call('save')
            ->assertHasNoErrors();

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'privateGroup' => true,
                'privateGroupPrice' => InputPrivateGroup::MINIMUN_PRICE + 1,
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.privateGroup"')
            ->assertSeeHtml('wire:model="product.privateGroup"')
            ->assertSeeHtml('wire:model.debounce.500ms="product.privateGroupPrice"')
            ->assertViewHas('minimumPrice');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
            ->set('product.privateGroup', false)
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }

    /** @test */
    function it_listen_for_step_change_request_and_rejects_it()
    {
        Livewire::test(InputPrivateGroup::class, ['model' => new ProductModelTest])
        ->set('product.privateGroup', true)
            ->emit('canChangeStep')
            ->assertNotEmitted('dataIsValid');
    }
}
