<?php

namespace Tests\Feature\app\http\livewire\wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Wizard\InputToProvide;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputToProvideTest extends TestCase
{
    /** @test  */
    function it_must_be_an_array()
    {
        $toProvide = ['Item 1'];

        Livewire::test(InputToProvide::class, [$toProvide])
            ->assertSet('toProvide', $toProvide)
            ->assertSet('item', null);
    }

    /** @test  */
    function it_add_item_to_the_list()
    {
        $toProvide = 'Item 1';

        Livewire::test(InputToProvide::class)
            ->set('item', $toProvide)
            ->call('addItem')
            ->assertEmitted('addAttribute', ['toProvide' => [$toProvide]])
            ->assertSet('item', null);
    }

    /** @test  */
    function it_not_add_a_empty_item_to_the_list()
    {
        Livewire::test(InputToProvide::class)
            ->call('addItem')
            ->assertNotEmitted('addAttribute');
    }

    /** @test  */
    function it_delete_item()
    {
        $toProvide = ['Item 1'];

        Livewire::test(InputToProvide::class, [$toProvide])
            ->call('deleteItem', 0)
            ->assertEmitted('addAttribute', ['toProvide' => []]);
    }
}
