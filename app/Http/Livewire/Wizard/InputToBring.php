<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\Models\Experience;

class InputToBring extends Component
{
    public Experience $experience;

    public $requeriment;

    protected $rules = [
        'requeriment' => 'required|string|min:5'
    ];

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
    }

    public function addRequerimentToList()
    {
        $this->validate();

        $tempToBting = $this->experience->toBring;

        $this->experience->toBring = array_merge(
            $tempToBting,
            [$this->requeriment]
        );

        $this->experience->save();

        $this->reset('requeriment');
    }

    public function removeRequerimentFromList($index)
    {
        $tempToBring = $this->experience->toBring;

        unset($tempToBring[$index]);

        $this->experience->toBring = $tempToBring;

        $this->experience->save();
    }

    public function render()
    {
        return view('livewire.wizard.input-to-bring');
    }
}
