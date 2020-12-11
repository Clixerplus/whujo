<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Validation\Rule;

class InputSkillLevel extends Component
{
    public $skillLevel;

    public function mount($skillLevel = null)
    {
        $this->skillLevel = $skillLevel;
    }

    public function updatedSkillLevel($value)
    {
        $this->save();
    }

    public function save()
    {
        $this->validate([
            'skillLevel' => 'required|' . Rule::in(config('product.skill_levels'))
        ]);
        $this->emitUp('saveAttribute', [
            'skillLevel' => $this->skillLevel
        ]);
    }

    public function render()
    {
        return view('livewire.wizard.input-skill-level', [
            'levelOptions' => config('product.skill_levels'),
        ]);
    }
}
