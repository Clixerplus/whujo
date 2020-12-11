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

        Livewire::test(InputMinimumAge::class, [$this->minimumAge])
            ->assertSet('minimumAge', $this->minimumAge);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        Livewire::test(InputMinimumAge::class)
            ->set('minimumAge', $this->minimumAge)
            ->call('save')
            ->assertEmitted('saveAttribute', ['minimumAge' => $this->minimumAge]);
    }

    /** @test  */
    function minimum_age_is_required()
    {
        Livewire::test(InputMinimumAge::class)
            ->set('minimumAge', null)
            ->call('save')
            ->assertHasErrors(['minimumAge' => 'required']);
    }

    /** @test  */
    function minimum_age_must_be_numeric()
    {
        Livewire::test(InputMinimumAge::class)
            ->set('minimumAge', 2.5)
            ->call('save')
            ->assertHasErrors(['minimumAge' => 'integer']);
    }

    /** @test  */
    function minimum_age_must_have_a_minimun()
    {
        Livewire::test(InputMinimumAge::class)
            ->set('minimumAge', 1)
            ->call('save')
            ->assertHasErrors(['minimumAge' => 'min']);
    }

    /** @test  */
    function minimum_age_must_have_a_maximum()
    {
        Livewire::test(InputMinimumAge::class)
            ->set('minimumAge', InputMinimumAge::MAX_AGE + 1)
            ->call('save')
            ->assertHasErrors(['minimumAge' => 'max']);
    }
}
