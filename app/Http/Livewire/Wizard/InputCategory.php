<?php

namespace App\Http\Livewire\Wizard;

use App\Models\Category;
use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputCategory extends StepBuilderWizard
{
    protected $rules;

    protected function setValidationRules(): void
    {
        $this->rules = [
            'product.category_id' => 'exists:categories,id'
        ];
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-category',
            [
                'categories' => Category::all(['id', 'name']),
            ]
        );
    }
}
