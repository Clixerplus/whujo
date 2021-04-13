<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Experience;


class WizardCreator extends Component
{

    public $currentStep;

    public $testAttr;

    public $productId;


    protected $listeners  = [
        'saveAttribute'
    ];

    protected $queryString = [
        'currentStep' => ['except' => ''],
        'productId'   => ['except' => ''],
    ];

    public function mount()    {

        $this->currentStep = request()->currentStep ?? 1;

        $this->productId = 11;


    }

    public function saveAttribute(array $attribute)
    {
        Experience::find($this->productId)->updateOrFail($attribute);

        $this->testAttr = 'Actualizado !!!';
    }

    public function render()
    {

        /** incomplete complete current */
        return view('livewire.wizard-creator', [
            'steps'   => $this->prepareSteps(),
            'product' => $this->getProduct()
        ]);
    }
    private function prepareSteps()
    {
        $product = $this->getproduct();
        return [
            (object)[
                'name'   => 'Nombre de Producto',
                'status' => empty($product->name) ? 'incomplete' : 'complete',
                'view'   => 'input-name',
                'field'  => 'name'
            ],
            (object)[
                'name'   => 'Categoria',
                'status' => empty($product->category_id) ? 'incomplete' : 'complete',
                'view'   => 'input-category',
                'field'  => 'category_id'
            ],
            (object)[
                'name'   => 'Tiempo de actividad',
                'status' => empty($product->duration) ? 'incomplete' : 'complete',
                'view'   =>'input-duration',
                'field'  => 'duration'
            ],
            (object)[
                'name'   => 'Describe la actividad',
                'status' => empty($product->description) ? 'incomplete' : 'complete',
                'view'   =>'input-description',
                'field'  => 'description'
            ],
            (object)[
                'name'   => 'Que incluyes?',
                'status' => empty($product->toProvide) ? 'incomplete' : 'complete',
                'view'   => 'input-to-provide',
                'field'  => 'toProvide'
            ],
            (object)[
                'name'   => 'Requerimientos',
                'status' => empty($product->toBring) ? 'incomplete' : 'complete',
                'view'   => 'input-to-bring',
                'field'  => 'toBring'
            ],
            (object)[
                'name'   => 'Horario',
                'status' => empty($product->starting) ? 'incomplete' : 'complete',
                'view'   => 'input-starting',
                'field'  => 'starting'
            ],
        ];
    }
    private function getProduct()
    {
        return Experience::find($this->productId);
    }

    public function next()
    {
        $maxSteps = count($this->prepareSteps()) - 1 ;
        if ($this->currentStep  != $maxSteps)
            $this->currentStep += 1;
    }

    public function previous()
    {
        if ($this->currentStep  != 0)
            $this->currentStep -= 1;
    }
}
