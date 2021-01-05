<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Support\Str;

class InputDescription extends Component
{
    public $description;

    public $counter;

    public const MAX_CHARS = 1400;

    const MIN_CHARS = 300;

    protected $rules = [
        'description' => 'required|string|between:' . self::MIN_CHARS . ',' . self::MAX_CHARS
    ];

    public function mount($description = null)
    {
        $this->description = $description;

        $this->counterChars();
    }

    public function counterChars()
    {
        $this->counter = Str::length($this->description);
    }

    public function updatedDescription($value)
    {
        $this->counterChars();

        $this->save();
    }

    public function save()
    {
        $this->validate();

        $this->emitUp('saveAttribute', [
            'description' => $this->description
        ]);
    }

    public function render()
    {
        return view('livewire.wizard.input-description', [
            'maxChars' => self::MAX_CHARS,
            'minChars' => self::MIN_CHARS,
        ]);
    }
}
