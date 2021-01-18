<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputMinimumAge extends StepBuilderWizard
{
    const MINIMUM_AGE = 0;

    const MAXIMUM_AGE = 100;

    protected function setValidationRules(): void
    {
        $rule = sprintf('required|integer|between:%s,%s', self::MINIMUM_AGE, self::MAXIMUM_AGE);

        $this->rules =
            [
                'product.minimumAge' => $rule
            ];
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-minimum-age',
            [
                'minAge' => self::MINIMUM_AGE,
                'maxAge' => self::MAXIMUM_AGE
            ]
        );
    }
}
