<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Support\Str;

class InputTodo extends Component
{
    public $toDo;

    public $counter;

    public const MAX_CHARS = 1400;

    const MIN_CHARS = 300;

    protected $rules = [
        'toDo' => 'required|string|between:' . self::MIN_CHARS . ',' . self::MAX_CHARS
    ];

    public function mount($toDo = null)
    {
        $this->toDo = $toDo;

        $this->counterChars();
    }

    public function counterChars()
    {
        $this->counter = Str::length($this->toDo);
    }

    public function updatedTodo($value)
    {
        $this->counterChars();

        $this->save();
    }

    public function save()
    {
        $this->validate();

        $this->emitUp('saveAttribute', [
            'toDo' => $this->toDo
        ]);
    }

    public function render()
    {
        return view('livewire.wizard.input-toDo', [
            'maxChars' => self::MAX_CHARS,
            'minChars' => self::MIN_CHARS,
        ]);
    }
}
