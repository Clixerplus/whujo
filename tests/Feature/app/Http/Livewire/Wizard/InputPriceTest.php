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
        Livewire::test(InputPrice::class, ['price' => $this->price])
            ->assertSet('price', $this->price);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        Livewire::test(InputPrice::class, ['price' => $this->price])
            ->call('updatedPrice', $this->price)
            ->assertEmitted('addAttribute', ['price'=> $this->price]);
    }

    /** @test  */
    function price_is_required()
    {
        Livewire::test(InputPrice::class, ['price' => null])
            ->call('updatedPrice', null)
            ->assertHasErrors(['price' => 'required']);
    }

    /** @test  */
    function price_must_be_numeric()
    {
        Livewire::test(InputPrice::class, ['price' => 'a'])
            ->call('updatedPrice', 'a')
            ->assertHasErrors(['price' => 'numeric']);
    }

    /** @test  */
    function price_must_have_a_minimun()
    {
        Livewire::test(InputPrice::class, ['price' => config('product.price.min') - 1])
            ->call('updatedPrice', config('product.price.min') - 1)
            ->assertHasErrors(['price' => 'min']);
    }
}
