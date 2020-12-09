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
            ->assertSet('limitTime', $this->intervals[1]);
    }

    /** @test  */
    function it_emit_addAttribute_event_on_updated()
    {
        Livewire::test(InputReservationLimitTime::class)
            ->set('limitTime', $this->intervals[1])
            ->call('saveInterval')
            ->assertEmitted('addAttribute', ['reservationLimitTime' => $this->intervals[1]]);
    }

    /** @test  */
    function it_must_exist_in_intervals()
    {
        Livewire::test(InputReservationLimitTime::class)
            ->set('limitTime', 900)
            ->call('saveInterval')
            ->assertHasErrors(['limitTime']);
    }

    /** @test  */
    function skill_level_is_required()
    {
        Livewire::test(InputReservationLimitTime::class)
            ->set('limitTime', null)
            ->call('saveInterval')
            ->assertHasErrors(['limitTime' => 'required']);
    }
}
