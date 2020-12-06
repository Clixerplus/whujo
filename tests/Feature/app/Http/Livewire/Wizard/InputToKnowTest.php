<?php

namespace Tests\Feature\app\http\livewire\wizard;

use App\Http\Livewire\Wizard\InputToKnow;
use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputToKnowTest extends TestCase
{
    /** @test  */
    function it_set_to_know_attribute()
    {
        $toKnow = Str::random(400);

        Livewire::test(InputToKnow::class, ['toKnow' => $toKnow])
            ->assertSet('toKnow', $toKnow);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        Livewire::test(InputToKnow::class, ['toKnow' => ''])
            ->call('updatedToKnow', '')
            ->assertEmitted('addAttribute', ['toKnow' => '']);
    }

    /** @test  */
    function to_know_must_have_a_maximum_chars()
    {
        $maxChars = config('product.MAX_LONG_TEXT');

        Livewire::test(InputToKnow::class, ['toKnow' => Str::random($maxChars + 1)])
            ->call('updatedToKnow', '')
            ->assertHasErrors(['toKnow' => 'max']);
    }
}
