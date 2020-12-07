<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class InputToProvide extends Component
{

    public array $toProvide;

    public $item;

    public function mount(array $toProvide = [])
    {
        $this->toProvide = $toProvide;

        $this->intitializeItem();
    }

    public function addItem()
    {
        if ($this->item <> '') {

            $this->toProvide[] = $this->item;

            $this->intitializeItem();

            $this->addAttribute();
        }
    }

    public function deleteItem(int $index)
    {

        unset($this->toProvide[$index]);

        $this->addAttribute();
    }

    private function addAttribute()
    {

        $this->emitUp('addAttribute', [
            'toProvide' => $this->toProvide
        ]);
    }

    private function intitializeItem()
    {
        $this->item = null;
    }

    public function render()
    {
        return view('livewire.wizard.input-to-provide');
    }
}
