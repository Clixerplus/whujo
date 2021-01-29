<?php

namespace App\Http\Livewire\Traits;

/**
 *
 */
trait CanValidateStepChange
{
    public function canChangeStep()
    {
        $this->validate();

        $this->emit('dataIsValid', true);
    }
}
