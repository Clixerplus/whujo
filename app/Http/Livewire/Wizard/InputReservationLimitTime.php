<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Validation\Rule;

class InputReservationLimitTime extends Component
{

    public $limitTime;

    const INTERVALS = [
        0, 1, 2, 3, 4, 5, 6, 12, 24, 48, 72
    ];

    public function mount(int $limitTime = 0)
    {
        $this->limitTime = $limitTime;
    }


    public function updatedLimitTime($value)
    {
        $this->saveInterval();
    }

    public function saveInterval()
    {
        $this->validate([
            'limitTime' => 'required|' . Rule::in(self::INTERVALS)
        ]);

        $this->emitUp('addAttribute', ['reservationLimitTime' => $this->limitTime]);
    }
    public function render()
    {
        return view(
            'livewire.wizard.input-reservation-limit-time',
            ['intervals' => self::INTERVALS]
        );
    }
}
