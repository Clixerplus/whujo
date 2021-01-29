<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\Models\Experience;

class InputToProvide extends Component
{
    const MIN_TEXT_LENGTH = 5;

    public Experience $experience;

    public $provision;

    protected $rules = [
        'provision' => 'required|string|min:' . self::MIN_TEXT_LENGTH
    ];

    protected $listeners  = [
        'canChangeStep'
    ];

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
    }

    public function addProvisionToList()
    {
        $this->validate();

        $tempToProvide = $this->experience->toProvide;

        $this->experience->toProvide = array_merge(
            $tempToProvide,
            [$this->provision]
        );

        $this->experience->save();

        $this->reset('provision');
    }

    public function removeProvisionFromList($index)
    {
        $tempToProvide = $this->experience->toProvide;

        unset($tempToProvide[$index]);

        $this->experience->toProvide = $tempToProvide;

        $this->experience->save();
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-to-provide',
            ['min_length' => self::MIN_TEXT_LENGTH]
        );
    }

    public function canChangeStep()
    {
        $this->emit('dataIsValid', true);
    }
}
