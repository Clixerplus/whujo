<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\Experience;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class ServiceBuilderWizard extends Component
{
    public $step;

    public $totalSteps;

    public $stepsMenu;

    public $product;

    public $component;

    public $title;

    public $field;

    public $item;

    protected $rules = [
        'product.name' => 'nullable',
        'product.category_id' => 'nullable',
        'product.description' => 'nullable',
        'product.state_id' => 'nullable',
        'product.price' => 'nullable',
        'product.features' => 'nullable',
        'product.photos' => 'nullable',
        'product.city_id' => 'nullable',

    ];

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

    public function mount(Service $service)
    {
        $this->step = 1;
        $this->totalSteps = count($this->steps);
        $this->product = $service;
        $this->setStepsMenu();
    }

    public function getStepData($index)
    {
        return $this->steps[$index - 1];
    }

    public function next()
    {

        $this->validateOnly('product.' . $this->field);

        $this->save();

        $this->step = ($this->step < count($this->steps))
            ? $this->step + 1
            : 4;
    }

    public function previous()
    {
        $this->validateOnly('product.' . $this->field);

        $this->save();

        $this->step = ($this->step > 1)
            ? $this->step - 1
            : 1;
    }

    public function goto($step)
    {
        $this->validateOnly('product.' . $this->field);

        $this->save();

        $this->step = $step;
    }

    public function save()
    {
        $this->product->update([
            $this->field => $this->product->{$this->field}
        ]);
    }

    public function addToList()
    {

        if (!empty($this->item)) {

            $array = $this->product->{$this->field} ?? [];

            $this->product->{$this->field} = array_merge(
                $array,
                [$this->item]
            );

            $this->item = "";

            $this->save();
        }
    }

    public function deleteFromList(int $index)
    {
        $array = $this->product->{$this->field};

        unset($array[$index]);

        $this->product->{$this->field} = $array;

        $this->save();
    }

    public function setStepsMenu()
    {
        foreach ($this->steps as $step) {
            if ($step['field'] == 'microservices') {
                $this->stepsMenu[] = [
                    'title'  => 'Microservicios',
                    'status' => true
                ];
            } elseif ($step['field'] == 'category') {
                $this->stepsMenu[] = [
                    'title'  => 'Categrorias',
                    'status' => true
                ];
            } else {
                $this->stepsMenu[] = [
                    'title' => $step['title'],
                    'status' => !Validator::make([$step['field'] => $this->product->{$step['field']}], [$step['field'] => $this->rules['product.' . $step['field']]])->fails()
                ];
            }
        }
    }

    public function render()
    {
        $data = $this->getStepData($this->step);

        $this->component = $data['component'];
        $this->field = $data['field'];
        $this->title = $data['title'];
        $this->{$this->field} = $this->product->{$this->field};

        return view('livewire.service-builder-wizard')->layout('layouts.main');
    }
}
