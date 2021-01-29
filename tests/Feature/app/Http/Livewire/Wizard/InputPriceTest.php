<?php

namespace Tests\Feature\app\http\livewire\wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Experience;
use App\Http\Livewire\Wizard\InputPrice;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputPriceTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->price = 2500;

        Livewire::test(InputPrice::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.price', $model->price);
    }

    /** @test  */
    function it_price_has_no_error_when_input_is_valid()
    {
        Livewire::test(InputPrice::class, ['model' => new ProductModelTest])
            ->set('product.price', InputPrice::MIN_PRICE_ALLOWED)
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_price_is_required()
    {
        Livewire::test(InputPrice::class, ['model' => new ProductModelTest])
            ->set('product.price', null)
            ->call('validateData')
            ->assertHasErrors(['product.price' => 'required']);
    }

    /** @test  */
    function it_price_must_be_numeric()
    {
        Livewire::test(InputPrice::class, ['model' => new ProductModelTest])
            ->set('product.price', 'string')
            ->call('validateData')
            ->assertHasErrors(['product.price' => 'numeric']);
    }

    /** @test  */
    function it_price_must_have_a_minimun()
    {
        Livewire::test(InputPrice::class, ['model' => new ProductModelTest])
            ->set('product.price', InputPrice::MIN_PRICE_ALLOWED - 1)
            ->call('save')
            ->assertHasErrors(['product.price' => 'min']);
    }

    /** @test  */
    function it_price_save_on_service_model()
    {
        Service::factory()->create(['price' => InputPrice::MIN_PRICE_ALLOWED]);
        $service = Service::first(['id', 'price']);
        $newPrice = InputPrice::MIN_PRICE_ALLOWED + 1;

        Livewire::test(InputPrice::class, ['model' => $service])
            ->set('product.price', $newPrice)
            ->call('save')
            ->assertHasNoErrors('product.price');

        $this->assertDatabaseHas(
            'services',
            [
                'id' => $service->id,
                'price' => $newPrice
            ]
        );
    }

    /** @test  */
    function it_price_save_on_experience_model()
    {
        Experience::factory()->create(['price' => InputPrice::MIN_PRICE_ALLOWED]);
        $experience = Experience::first(['id', 'price']);
        $newPrice = InputPrice::MIN_PRICE_ALLOWED + 1;

        Livewire::test(InputPrice::class, ['model' => $experience])
            ->set('product.price', $newPrice)
            ->call('save')
            ->assertHasNoErrors('product.price');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'price' => $newPrice
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputPrice::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.price"')
            ->assertSeeHtml('wire:model.debounce.500ms="product.price"');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Livewire::test(InputPrice::class, ['model' => new ProductModelTest])
            ->set('product.price',  InputPrice::MIN_PRICE_ALLOWED)
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }

    /** @test */
    function it_listen_for_step_change_request_and_rejects_it()
    {
        Livewire::test(InputPrice::class, ['model' => new ProductModelTest])
            ->emit('canChangeStep')
            ->assertNotEmitted('dataIsValid');
    }
}
