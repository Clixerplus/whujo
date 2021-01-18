<?php

namespace App\Http\Livewire\Wizard;

use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputToKnow extends StepBuilderWizard
{
    const MAX_TEXT_LENGTH = 1400;

    protected $rules;

    protected  function setValidationRules(): void
    {
        $this->rules = [
            'product.toKnow' => sprintf('string|max:%s', self::MAX_TEXT_LENGTH)
        ];
    }

    public function render()
    {
        return view('livewire.wizard.input-to-know', [
            'max_length' => self::MAX_TEXT_LENGTH,
        ]);
    }
}
