<?php

namespace App\Http\Livewire\Wizard;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class InputName extends Component
{
    public $name;

    public $validate;

    protected $rules = [
        'name' => 'required|string|between:5,150'
    ];

    public function mount(string $name = null)
    {
        $this->name = $name;
    }


    public function updatedName($value)
    {
        $this->save();
    }

    public function save()
    {
        $this->validate();

        $this->emitUp('saveAttribute', [
            'name' => $this->name
        ]);
    }

    public function render()
    {
        return view('livewire.wizard.input-name');
    }
}
