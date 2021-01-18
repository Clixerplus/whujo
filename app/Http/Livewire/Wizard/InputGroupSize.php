<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputGroupSize extends StepBuilderWizard
{
    const MINIMUM_SIZE = 1;

    const MAXIMUM_SIZE = 15;

    protected function setValidationRules(): void
    {
        $rule = sprintf('required|numeric|between:%s,%s', self::MINIMUM_SIZE, self::MAXIMUM_SIZE);

        $this->rules = [
            'product.groupSize' => $rule
        ];
    }
    public function render()
    {
        return view(
            'livewire.wizard.input-group-size',
            ['groupMaxSize' => config('product.max_group_size')]
        );
    }
}
