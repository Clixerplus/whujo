<?php

namespace App\Http\Livewire\Wizard;


use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputDescription extends StepBuilderWizard
{

    const MAX_CHARS = 1400;

    const MIN_CHARS = 300;

    protected $rules;

    protected function setValidationRules(): void
    {
        $rule = sprintf('required|string|between:%s,%s', self::MIN_CHARS, self::MAX_CHARS);

        $this->rules = [
            'product.description' => $rule
        ];
    }

    public function render()
    {
        return view('livewire.wizard.input-description', [
            'maxChars' => self::MAX_CHARS,
            'minChars' => self::MIN_CHARS,
        ]);
    }
}
