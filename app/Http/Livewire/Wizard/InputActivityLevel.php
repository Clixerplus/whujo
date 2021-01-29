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
            'product.activityLevel' => 'required|in:' . ACTIVITY_LVL_LIST
        ];
    }

    public function render()
    {
        return view('livewire.wizard.input-activity-level', [
            'levelOptions' => [
                ACTIVITY_LVL_LIGHT,
                ACTIVITY_LVL_MODERATE,
                ACTIVITY_LVL_EXTREME,
                ACTIVITY_LVL_DEMANDING
            ]
        ]);
    }
}
