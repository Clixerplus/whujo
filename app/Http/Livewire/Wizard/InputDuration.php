<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\ValueObjcets\TimeVO;
use Illuminate\Validation\Rule;

class InputDuration extends Component
{
    public $hour;

    public $minute;

    public function mount(TimeVO $time = null)
    {

        $this->hour = $time->hour;

        $this->minute = $time->minute;
    }


    public function updated($key, $value)
    {
        $this->save();
    }

    public function save()
    {
        $this->validate([
            'hour'   => 'required|numeric|between:0,16',
            'minute' => 'required|' . Rule::in([0, 15, 30, 45])
        ]);

        $this->emitUp('saveAttribute', [
            'duration' => $this->getTime()
        ]);
    }

    private function getTime()
    {
        return new TimeVO($this->hour, $this->minute);
    }

    public function render()
    {
        return view('livewire.wizard.input-duration', [
            'hoursInterval' => 16,
            'minutesInterval' => [0, 15, 30, 45]
        ]);
    }
}
