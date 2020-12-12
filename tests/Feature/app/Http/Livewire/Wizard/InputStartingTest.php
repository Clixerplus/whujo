<?php

namespace Tests\Feature\app\http\livewire\wizard;


use Tests\TestCase;
use Livewire\Livewire;
use App\ValueObjcets\TimeVO;
use App\Http\Livewire\Wizard\InputStarting;

class InputStartingTest extends TestCase
{


    function setUp(): void
    {
        parent::setup();

        $this->time = new TimeVO(1, 0);
    }

    /** @test  */
    function it_set_time_attribute()
    {
        Livewire::test(InputStarting::class, [$this->time])
            ->assertSet('hour', $this->time->hour)
            ->assertSet('minute', $this->time->minute);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        Livewire::test(InputStarting::class)
            ->set('hour', $this->time->hour)
            ->set('minute', $this->time->minute)
            ->call('save')
            ->assertEmitted('saveAttribute');
    }

    /** @test  */
    function values_must_be_required()
    {
        Livewire::test(InputStarting::class)
            ->set('hour', null)
            ->set('minute', null)
            ->call('save')
            ->assertHasErrors([
                'hour' => 'required',
                'minute' => 'required'
            ]);
    }

    /** @test  */
    function values_must_be_in_range()
    {
        Livewire::test(InputStarting::class)
            ->set('hour', 17)
            ->set('minute', 5)
            ->call('save')
            ->assertHasErrors([
                'hour' => 'between',
                'minute' => 'in',
            ]);
    }
}
