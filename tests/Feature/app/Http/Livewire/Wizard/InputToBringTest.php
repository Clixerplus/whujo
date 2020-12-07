<?php

namespace Tests\Feature\app\http\livewire\wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Wizard\InputToBring;

class InputToBringTest extends TestCase
{
    /** @test  */
    function it_must_be_an_array()
    {
        $toBring = ['Item 1'];

        Livewire::test(InputToBring::class, [$toBring])
            ->assertSet('toBring', $toBring)
            ->assertSet('item', null);
    }

    /** @test  */
    function it_add_item_to_the_list()
    {
        $toBring = 'Item 1';

        Livewire::test(InputToBring::class)
            ->set('item', $toBring)
            ->call('addItem')
            ->assertEmitted('addAttribute', ['toBring' => [$toBring]])
            ->assertSet('item', null);
    }

    /** @test  */
    function it_not_add_a_empty_item_to_the_list()
    {
        Livewire::test(InputToBring::class)
            ->call('addItem')
            ->assertNotEmitted('addAttribute');
    }

    /** @test  */
    function it_delete_item()
    {
        $toBring = ['Item 1'];

        Livewire::test(InputToBring::class, [$toBring])
            ->call('deleteItem', 0)
            ->assertEmitted('addAttribute', ['toBring' => []]);
    }
}
