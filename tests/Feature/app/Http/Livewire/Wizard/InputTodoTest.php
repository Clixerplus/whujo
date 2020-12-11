<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Str;
use App\Http\Livewire\Wizard\InputTodo;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputTodoTest extends TestCase
{

    /** @test  */
    function it_set_todo_attribute()
    {
        $toDo = Str::random(400);

        Livewire::test(InputTodo::class, [$toDo])
            ->assertSet('toDo', $toDo);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        $toDo = Str::random(400);

        Livewire::test(InputTodo::class)
            ->set('toDo', $toDo)
            ->call('save')
            ->assertEmitted('saveAttribute', ['toDo' => $toDo]);
    }

    /** @test  */
    function todo_is_required()
    {
        Livewire::test(InputTodo::class)
            ->set('toDo', '')
            ->call('save')
            ->assertHasErrors(['toDo' => 'required']);
    }

    /** @test  */
    function todo_must_have_a_minimun_chars()
    {
        Livewire::test(InputTodo::class)
            ->set('toDo', Str::random(299))
            ->call('save')
            ->assertHasErrors(['toDo' => 'between']);
    }

    /** @test  */
    function todo_must_have_a_maximum_chars()
    {
        Livewire::test(InputTodo::class)
            ->set('toDo', Str::random(config('product.MAX_LONG_TEXT') + 1))
            ->call('save')
            ->assertHasErrors(['toDo' => 'between']);
    }
}
