<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class InputPrice extends Component
{
    public $price;

    public function mount($price = 0)
    {
        $this->price = $price;
    }


    public function updatedPrice($value)
    {
        $this->save();
    }

    public function save()
    {
        $this->validate([
            'price' => 'required|numeric|min:' . config('product.price.min')
        ]);

        $this->emitUp('saveAttribute', ['price' => $this->price]);
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-price',
            ['minPrice' => config('product.price.min')]
        );
    }
}
