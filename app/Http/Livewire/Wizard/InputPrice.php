<?php

namespace App\Http\Livewire\Wizard;

use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputPrice extends StepBuilderWizard
{
    const MIN_PRICE_ALLOWED = 2500;

    protected $rules;

    protected function setValidationRules(): void
    {
        $this->rules = [
            'product.price' => sprintf('required|numeric|min:%s', self::MIN_PRICE_ALLOWED)
        ];
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-price',
            [
                'minPrice' => config('product.price.min')
            ]
        );
    }
}
