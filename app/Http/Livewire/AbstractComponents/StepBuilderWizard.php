<?php

namespace App\Http\Livewire\AbstractComponents;


use Livewire\Component;
use Illuminate\Database\Eloquent\Model as ProductModel;

abstract class StepBuilderWizard extends Component
{

    public $product;

    /**
     * SearchableComponent constructor.
     *
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct($id);

        $this->setValidationRules();
    }

    public function mount(ProductModel $model)
    {
        $this->product = $model;
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
