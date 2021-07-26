<?php

namespace App\Http\Livewire\Wizard;

use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputName extends StepBuilderWizard
{
    const MIN_NAME_LENGTH = 10;

    const MAX_NAME_LENGTH = 150;

    protected $rules;

    protected function setValidationRules(): void
    {
        $rule = sprintf('required|string|between:%s,%s', self::MIN_NAME_LENGTH, self::MAX_NAME_LENGTH);

      /*   $this->rules = [
            'product.name' => $rule
        ]; */
    }

    public function rules()
    {
        return [
            'product.name' =>  sprintf('required|string|between:%s,%s', self::MIN_NAME_LENGTH, self::MAX_NAME_LENGTH)
        ];
    }

    public function render()
    {
        return view('livewire.wizard.input-name');
    }
}
