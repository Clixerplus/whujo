<?php

namespace App\Http\Livewire\AbstractComponents;

use App\Http\Livewire\Traits\CanValidateStepChange;
use Livewire\Component;
use Illuminate\Database\Eloquent\Model as ProductModel;

abstract class StepBuilderWizard extends Component
{
    use CanValidateStepChange;

    public $product;

    protected $listeners  = [
        'canChangeStep'
    ];

    public function __construct($id)
    {
        parent::__construct($id);

        $this->setValidationRules();
    }

    public function mount(ProductModel $product)
    {
        $this->product = $product;
    }

    public function save()
    {
        $this->product->save($this->validateData());
    }

    public function validateData()
    {
        return $this->validate();
    }

    abstract protected function setValidationRules(): void;
}
