<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Str;
use App\Http\Livewire\Wizard\InputDescription;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputDescriptionTest extends TestCase
{

    /** @test  */
    function it_set_description_attribute()
    {
        $description = Str::random(400);

        Livewire::test(InputDescription::class, [$description])
            ->assertSet('description', $description);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        $description = Str::random(400);

        Livewire::test(InputDescription::class)
            ->set('description', $description)
            ->call('save')
            ->assertEmitted('saveAttribute', ['description' => $description]);
    }

    /** @test  */
    function todo_is_required()
    {
        Livewire::test(InputDescription::class)
            ->set('description', '')
            ->call('save')
            ->assertHasErrors(['description' => 'required']);
    }

    /** @test  */
    function todo_must_have_a_minimun_chars()
    {
        Livewire::test(InputDescription::class)
            ->set('description', Str::random(299))
            ->call('save')
            ->assertHasErrors(['description' => 'between']);
    }

    /** @test  */
    function todo_must_have_a_maximum_chars()
    {
        Livewire::test(InputDescription::class)
            ->set('description', Str::random(config('product.MAX_LONG_TEXT') + 1))
            ->call('save')
            ->assertHasErrors(['description' => 'between']);
    }
}
