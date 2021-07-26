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
        0 => [
            'field'     => 'name',
            'component' => 'wizard.inputs.name',
            'title'     => 'Nombre del Servicio',
        ],
        1 => [
            'field'     => 'category_id',
            'component' => 'wizard.inputs.category',
            'title'     => 'Tipo de Servicio',
        ],
        2 => [
            'field'     => 'description',
            'component' => 'wizard.inputs.description',
            'title'     => 'Describe tu servicio',
        ],
        3 => [
            'field'     => 'state_id',
            'component' => 'wizard.inputs.location',
            'title'     => 'Lugar de trabajo',
        ],
        4 => [
            'field'     => 'price',
            'component' => 'wizard.inputs.price',
            'title'     => 'Costo de tu trabajo',
        ],
        5 => [
            'field'     => 'features',
            'component' => 'wizard.inputs.features',
            'title'     => 'Caracteristicas',
        ],
        6 => [
            'field'     => 'photos',
            'component' => 'wizard.inputs.photos',
            'title'     => 'Galería ilustrativa',
        ],
        7 => [
            'field'     => 'city_id',
            'component' => 'wizard.inputs.microservices',
            'title'     => 'Microptrabajos adicionales',
        ],
    ];

    protected $listeners  = [
        'next',
        'previous'
    ];

    protected $isFinished = false;

    public $currentStep = 0;
    public $product;

    public function mount(Service $service)
    {
        $this->product = $service;
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

    public function forward()
    {
        $this->emit('stepForward');
    }

    public function backward()
    {
        $this->emit('previous');
    }

    public function next()
    {
        if ($this->currentStep < count($this->steps) - 1) {
            $this->currentStep = $this->currentStep + 1;
        } else {
            session()->flash('isFinished', 'Well Done');
            return redirect()->route('service.index');
        }
    }

    public function previous()
    {
        if ($this->currentStep > 0)
            $this->currentStep = $this->currentStep - 1;
    }
}
