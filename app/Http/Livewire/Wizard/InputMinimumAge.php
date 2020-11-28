<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Support\Str;

class InputMinimumAge extends Component
{
    public $minimumAge;

    const MIN_AGE = 2;

    const MAX_AGE = 25;

    protected $rules = [
        'minimumAge' => 'required|integer|min:' . self::MIN_AGE . '|max:' . self::MAX_AGE
    ];

    public function mount($minimumAge)
    {
        $this->minimumAge = $minimumAge;
    }

    public function updatedMinimumAge($value)
    {

        $this->validate();

        $this->emitUp('addAttribute', [
            'minimum_age' => $this->minimumAge
        ]);
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-minimum-age',
            ['minAge' => self::MIN_AGE, 'maxAge' => self::MAX_AGE]
        );
    }
}
