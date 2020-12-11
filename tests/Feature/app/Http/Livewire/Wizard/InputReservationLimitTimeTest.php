<?php

namespace Tests\Feature\app\http\livewire\wizard;

use Tests\TestCase;
use Livewire\Livewire;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Livewire\Wizard\InputReservationLimitTime;

class InputReservationLimitTimeTest extends TestCase
{
    public $intervals;

    public function setup(): void
    {
        parent::setup();

        $this->intervals = InputReservationLimitTime::INTERVALS;
    }

    /** @test  */
    function it_set_limit_time_attribute()
    {
        Livewire::test(InputReservationLimitTime::class, [$this->intervals[1]])
            ->assertSet('reservationLimitTime', $this->intervals[1]);
    }

    /** @test  */
    function it_emit_saveAttribute_event_on_updated()
    {
        Livewire::test(InputReservationLimitTime::class)
            ->set('reservationLimitTime', $this->intervals[1])
            ->call('save')
            ->assertEmitted('saveAttribute', ['reservationLimitTime' => $this->intervals[1]]);
    }

    /** @test  */
    function it_must_exist_in_intervals()
    {
        Livewire::test(InputReservationLimitTime::class)
            ->set('reservationLimitTime', 900)
            ->call('save')
            ->assertHasErrors(['reservationLimitTime']);
    }

    /** @test  */
    function skill_level_is_required()
    {
        Livewire::test(InputReservationLimitTime::class)
            ->set('reservationLimitTime', null)
            ->call('save')
            ->assertHasErrors(['reservationLimitTime' => 'required']);
    }
}
