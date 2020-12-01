<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;

class InputPrice extends Component
{
    public $price;

    public function mount(string $price = null)
    {
        $this->price = $price;
    }


    public function updatedPrice($value)
    {


        $this->validate([
            'price' => 'required|numeric|min:' . config('product.price.min')
        ]);
           
        $this->emitUp('addAttribute', ['price' => $this->price]);
    }
    public function render()
    {
        return view(
            'livewire.wizard.input-price',
            ['minPrice' => config('product.price.min')]
        );
    }
}
