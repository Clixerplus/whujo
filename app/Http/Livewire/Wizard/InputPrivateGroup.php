<?php

namespace App\Http\Livewire\Wizard;

use Illuminate\Database\Eloquent\Model as ProductModel;
use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputPrivateGroup extends StepBuilderWizard
{
    const MINIMUN_PRICE = 500;

    protected $rules;

    public function mount(ProductModel $model)
    {
        parent::mount($model);

        $this->product->privateGroup = (!is_null($this->product->privateGroup)) ?: false;
    }

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
