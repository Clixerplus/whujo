<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class InputToKnow extends Component
{
    public $toKnow;

    public function mount($toKnow = '')
    {
        $this->toKnow = $toKnow;
    }

    public function updatedToKnow($value)
    {
        $this->validate([
            'toKnow' => 'string|max:' . config('product.MAX_LONG_TEXT')
        ]);

        $this->emitUp('addAttribute', [
            'to_know' => $this->toKnow
        ]);
    }

    public function render()
    {
        return view('livewire.wizard.input-to-know', [
            'maxChars' => config('MAX_LONG_TEXT'),
        ]);
    }
}
