<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\Experience;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class ServiceBuilderWizard extends Component
{

    private $steps =  [
        [
            'field'     => 'name',
            'component' => 'wizard.inputs.name',
            'title'     => 'Nombre del Servicio',
        ],

        [
            'field'     => 'category_id',
            'component' => 'wizard.inputs.category',
            'title'     => 'Tipo de Servicio',
        ],

        [
            'field'     => 'description',
            'component' => 'wizard.inputs.description',
            'title'     => 'Describe tu servicio',
        ],
        [
            'field'     => 'state_id',
            'component' => 'wizard.inputs.location',
            'title'     => 'Lugar de trabajo',
        ],
        [
            'field'     => 'price',
            'component' => 'wizard.inputs.price',
            'title'     => 'Costo de tu trabajo',
        ],
        [
            'field'     => 'features',
            'component' => 'wizard.inputs.features',
            'title'     => 'Caracteristicas',
        ],
        [
            'field'     => 'photos',
            'component' => 'wizard.inputs.photos',
            'title'     => 'Galería ilustrativa',
        ],
        [
            'field'     => 'city_id',
            'component' => 'wizard.inputs.microservices',
            'title'     => 'Microptrabajos adicionales',
        ],
    ];

    public $currentStep = 0;
    public $product;

    public function mount(Service $product)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.service-builder-wizard', [
            'totalSteps' => count($this->steps),
            'stepsMenu'  => [],
            'title'      => '',
            'component'  => data_get($this->steps, "{$this->currentStep}.component")
        ])->layout('layouts.main');
    }

    public function next()
    {
        if ($this->currentStep < count($this->steps))
            $this->currentStep = $this->currentStep + 1;
    }

    public function previous()
    {
        if ($this->currentStep > 0)
            $this->currentStep = $this->currentStep - 1;
    }
}
