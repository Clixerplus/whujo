<?php

namespace Tests\Feature\app\http\livewire\wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Wizard\InputPrice;

class InputPriceTest extends TestCase
{

    function setUp(): void
    {
        parent::setup();

        $this->price = config('product.price.min');
    }

    /** @test  */
    function it_set_price_attribute()
    {
        Livewire::test(InputPrice::class, [$this->price])
            ->assertSet('price', $this->price);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        Livewire::test(InputPrice::class)
            ->set('price', $this->price)
            ->call('save')
            ->assertEmitted('saveAttribute', ['price' => $this->price]);
    }

    /** @test  */
    function price_is_required()
    {
        Livewire::test(InputPrice::class)
            ->set('price', null)
            ->call('save')
            ->assertHasErrors(['price' => 'required']);
    }

    /** @test  */
    function price_must_be_numeric()
    {
        Livewire::test(InputPrice::class)
            ->set('price', 'a')
            ->call('save')
            ->assertHasErrors(['price' => 'numeric']);
    }

    /** @test  */
    function price_must_have_a_minimun()
    {
        Livewire::test(InputPrice::class)
            ->set('price', config('product.price.min') - 1)
            ->call('save')
            ->assertHasErrors(['price' => 'min']);
    }
}
