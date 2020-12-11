<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Validation\Rule;

class InputReservationLimitTime extends Component
{

    public $reservationLimitTime;

    const INTERVALS = [
        0, 1, 2, 3, 4, 5, 6, 12, 24, 48, 72
    ];

    public function mount(int $reservationLimitTime = 0)
    {
        $this->reservationLimitTime = $reservationLimitTime;
    }


    public function updatedreservationLimitTime($value)
    {
        $this->save();
    }

    public function save()
    {
        $this->validate([
            'reservationLimitTime' => 'required|' . Rule::in(self::INTERVALS)
        ]);

        $this->emitUp('saveAttribute', ['reservationLimitTime' => $this->reservationLimitTime]);
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-reservation-limit-time',
            ['intervals' => self::INTERVALS]
        );
    }
}
