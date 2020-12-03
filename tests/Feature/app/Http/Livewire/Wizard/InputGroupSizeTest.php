<?php

namespace Tests\Feature\app\http\livewire\wizrad;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Wizard\InputGroupSize;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputGroupSizeTest extends TestCase
{
    function setUp(): void
    {
        parent::setup();

        $this->maxSize = config('product.max_group_size');
    }

    /** @test  */
    function it_set_group_size_attribute()
    {
        Livewire::test(InputGroupSize::class, ['groupSize' => 5])
            ->assertSet('groupSize', 5);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        Livewire::test(InputGroupSize::class, ['groupSize' => 5])
            ->call('updatedGroupSize', 5)
            ->assertEmitted('addAttribute', ['groupSize' => 5]);
    }

    /** @test  */
    function group_size_is_required()
    {
        Livewire::test(InputGroupSize::class, ['groupSize' => null])
            ->call('updatedGroupSize', null)
            ->assertHasErrors(['groupSize' => 'required']);
    }

    /** @test  */
    function group_size_must_be_numeric()
    {
        Livewire::test(InputGroupSize::class, ['groupSize' => 'a'])
            ->call('updatedGroupSize', 'a')
            ->assertHasErrors(['groupSize' => 'numeric']);
    }

    /** @test  */
    function group_size_must_have_a_minimum()
    {
        Livewire::test(InputGroupSize::class, ['groupSize' => 0])
            ->call('updatedGroupSize', 0)
            ->assertHasErrors(['groupSize' => 'between']);
    }

    /** @test  */
    function group_size_must_have_a_maximum()
    {
        Livewire::test(InputGroupSize::class, ['groupSize' => $this->maxSize + 1])
            ->call('updatedGroupSize', $this->maxSize + 1)
            ->assertHasErrors(['groupSize' => 'between']);
    }
}
