<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use Illuminate\Support\Str;

class InputTodo extends Component
{
    public $todo;

    public $counter;

    public const MAX_CHARS = 1400;

    const MIN_CHARS = 300;

    protected $rules = [
        'todo' => 'required|string|between:' . self::MIN_CHARS . ',' . self::MAX_CHARS
    ];

    public function mount($todo)
    {
        $this->$todo = $todo ?? '';
        $this->counterChars();
    }

    public function counterChars()
    {
        $this->counter = Str::length($this->todo);
    }

    public function updatedTodo($value)
    {
        $this->counterChars();

        $this->validate();

        $this->emitUp('addAttribute', [
            'todo' => $this->todo
        ]);
    }

    public function render()
    {
        return view('livewire.wizard.input-todo', [
            'maxChars' => self::MAX_CHARS,
            'minChars' => self::MIN_CHARS
        ]);
    }
}
