<?php

namespace App\Http\Livewire\AbstractComponents;

use App\Http\Livewire\Traits\CanValidateStepChange;
use Livewire\Component;

abstract class StepBuilderWizard extends Component
{
    use CanValidateStepChange;

    public $product;

    protected $listeners  = [
        'canChangeStep',
        'stepForward' => 'save',
        'stepBackward',
    ];

    public function __construct($id)
    {
        parent::__construct($id);

        $this->setValidationRules();
    }

    public function mount($product = null)
    {
        $this->product = $product;
    }

    public function save()
    {
        $this->product->save($this->validateData());
        $this->emitUp('next');
    }

    public function validateData()
    {
        return $this->validate();
    }

    abstract protected function setValidationRules(): void;
}
