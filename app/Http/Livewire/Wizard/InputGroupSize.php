<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class InputGroupSize extends Component
{
    public $groupSize;

    public function mount($groupSize = 1)
    {
        $this->groupSize = $groupSize;
    }

    public function updatedGroupSize($value)
    {
        $this->validate([
            'groupSize' => 'required|numeric|between:1,' . config('product.max_group_size')
        ]);

        $this->emitUp('addAttribute', ['group_size' => $this->groupSize]);
    }
    public function render()
    {
        return view(
            'livewire.wizard.input-group-size',
            ['groupMaxSize' => config('product.max_group_size')]
        );
    }
}
