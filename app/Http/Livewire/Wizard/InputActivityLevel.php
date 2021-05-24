<?php

namespace App\Http\Livewire\Wizard;


use Illuminate\Validation\Rule;
use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputActivityLevel extends StepBuilderWizard
{
    protected $rules;

    protected function setValidationRules(): void
    {
        $this->rules = [
            'product.activityLevel' => 'required|in:LIGHT,MODERATE,EXTREME,DEMANDING'
        ];
    }

    public function render()
    {
        return view('livewire.wizard.input-activity-level', [
            'levelOptions' => [
                'LIGHT',
                'MODERATE',
                'EXTREME',
                'DEMANDING'
            ]
        ]);
    }
}
