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
        $todo = Str::random(400);
        Livewire::test(InputTodo::class, ['todo' => $todo])
            ->assertSet('todo', $todo);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        $todo = Str::random(400);
        Livewire::test(InputTodo::class, ['todo' => $todo])
            ->call('updatedTodo', $todo)
            ->assertEmitted('addAttribute', ['todo' => $todo]);
    }

    /** @test  */
    function todo_is_required()
    {
        Livewire::test(InputTodo::class, ['todo' => ''])
            ->call('updatedTodo', '')
            ->assertHasErrors(['todo' => 'required']);
    }

    /** @test  */
    function todo_must_have_a_minimun_chars()
    {
        Livewire::test(InputTodo::class, ['todo' => Str::random(299)])
            ->call('updatedTodo', '')
            ->assertHasErrors(['todo' => 'between']);
    }

    /** @test  */
    function todo_must_have_a_maximum_chars()
    {
        Livewire::test(InputTodo::class, ['todo' => Str::random(1201)])
            ->call('updatedTodo', '')
            ->assertHasErrors(['todo' => 'between']);
    }
}
