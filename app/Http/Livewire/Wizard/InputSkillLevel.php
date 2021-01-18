<?php

namespace App\Http\Livewire\Wizard;

use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputSkillLevel extends StepBuilderWizard
{
    protected $rules;

    protected function setValidationRules(): void
    {
        $this->rules = [
            'product.skillLevel' => sprintf('required|in:%s', SKILL_LVL_LIST)
        ];
    }

    public function render()
    {
        return view('livewire.wizard.input-skill-level', [
            'levelOptions' => [
                SKILL_LVL_BEGINNER, SKILL_LVL_MEDIUM,
                SKILL_LVL_ADVANCED, SKILL_LVL_EXPERT
            ],
        ]);
    }
}
