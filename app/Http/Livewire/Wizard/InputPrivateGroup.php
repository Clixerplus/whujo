<?php

namespace App\Http\Livewire\Wizard;

use App\Http\Livewire\AbstractComponents\StepBuilderWizard;
use Livewire\Component;

class InputPrivateGroup extends StepBuilderWizard
{
    const MINIMUN_PRICE = 500;

    protected $rules;

    protected function setValidationRules(): void
    {
        $this->rules = [
            'product.privateGroup' => 'required|boolean',
            'product.privateGroupPrice' => 'required_if:product.privateGroup,true|numeric|min:' . self::MINIMUN_PRICE,
        ];
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-private-group',
            ['minimumPrice' => self::MINIMUN_PRICE]
        );
    }
}
