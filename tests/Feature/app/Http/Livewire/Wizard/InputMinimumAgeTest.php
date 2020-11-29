<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Wizard\InputMinimumAge;

class InputMinimumAgeTest extends TestCase
{
    private $minimumAge = 18;

    /** @test  */
    function it_set_minimum_age_attribute()
    {

        Livewire::test(InputMinimumAge::class, ['minimumAge' => $this->minimumAge])
            ->assertSet('minimumAge', $this->minimumAge);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        Livewire::test(InputMinimumAge::class, ['minimumAge' => $this->minimumAge])
            ->call('updatedMinimumAge', $this->minimumAge)
            ->assertEmitted('addAttribute', ['minimum_age' => $this->minimumAge]);
    }

    /** @test  */
    function minimum_age_is_required()
    {
        Livewire::test(InputMinimumAge::class, ['minimumAge' => null])
            ->call('updatedMinimumAge', null)
            ->assertHasErrors(['minimumAge' => 'required']);
    }

    /** @test  */
    function minimum_age_must_be_numeric()
    {
        Livewire::test(InputMinimumAge::class, ['minimumAge' => 2.5])
            ->call('updatedMinimumAge', 2.5)
            ->assertHasErrors(['minimumAge' => 'integer']);
    }

    /** @test  */
    function minimum_age_must_have_a_minimun()
    {
        Livewire::test(InputMinimumAge::class, ['minimumAge' => InputMinimumAge::MIN_AGE - 1])
            ->call('updatedMinimumAge', 1)
            ->assertHasErrors(['minimumAge' => 'min']);
    }

    /** @test  */
    function minimum_age_must_have_a_maximum()
    {
        Livewire::test(InputMinimumAge::class, ['minimumAge' => InputMinimumAge::MAX_AGE + 1])
            ->call('updatedMinimumAge', InputMinimumAge::MAX_AGE + 1)
            ->assertHasErrors(['minimumAge' => 'max']);
    }
}
