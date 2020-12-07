<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class InputToBring extends Component
{
    public array $toBring;

    public $item;

    public function mount(array $toBring = [])
    {
        $this->toBring = $toBring;

        $this->intitializeItem();
    }

    public function addItem()
    {
        if ($this->item <> '') {

            $this->toBring[] = $this->item;

            $this->intitializeItem();

            $this->addAttribute();
        }
    }

    public function deleteItem(int $index)
    {

        unset($this->toBring[$index]);

        $this->addAttribute();
    }

    private function addAttribute()
    {

        $this->emitUp('addAttribute', [
            'toBring' => $this->toBring
        ]);
    }

    private function intitializeItem()
    {
        $this->item = null;
    }

    public function render()
    {
        return view('livewire.wizard.input-to-bring');
    }
}
