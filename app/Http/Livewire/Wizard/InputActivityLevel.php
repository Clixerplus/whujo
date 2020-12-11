<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Validation\Rule;

class InputActivityLevel extends Component
{

    public $activityLevel;

    public function mount($activityLevel = null)
    {
        $this->activityLevel = $activityLevel;
    }

    public function updatedActivityLevel($value)
    {
        $this->save();
    }

    public function save()
    {
        $this->validate([
            'activityLevel' => 'required|' . Rule::in(config('product.activity_levels'))
        ]);

        $this->emitUp('saveAttribute', [
            'activityLevel' => $this->activityLevel
        ]);
    }

    public function render()
    {
        return view('livewire.wizard.input-activity-level', [
            'levelOptions' => config('product.activity_levels'),
        ]);
    }
}
