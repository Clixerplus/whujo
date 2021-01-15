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

    private $steps =  [
        [
            'field'     => 'name',
            'component' => 'livewire.wizard.input-name',
            'title'     => 'Nombre de la experiencia',
        ],
        [
            'field'     => 'category_id',
            'component' => 'livewire.wizard.input-category',
            'title'     => 'Category de tu producto',
        ],
        [
            'field'     => 'description',
            'component' => 'livewire.wizard.input-description',
            'title'     => 'Describenos que tu idea',
        ],
        [
            'field'     => 'features',
            'component' => 'wizard.inputs.features',
            'title'     => 'Ventajas y Beneficios',
        ],
        [
            'field'     => 'price',
            'component' => 'livewire.wizard.input-price',
            'title'     => 'Costo de tu trabajo',
        ],
        [
            'field'     => 'microservices',
            'component' => 'wizard.inputs.microservices',
            'title'     => 'Servicios Adicionales',
            'suggest'   => 'wizard.suggest.miroservices'
        ]
    ];

    protected $rules = [
        'product.name' => 'required|string|between:5,120',
        'product.category_id' => 'required|exists:categories,id',
        'product.description' => 'required|string|between:300,1400',
        'product.features' => 'nullable|array',
        'product.price' => 'required|numeric|min:' . MIN_PRICE,
    ];

    public function mount(Service $service)
    {
        //Service::factory()->blank()->create();
        $this->step = 1;

        $this->totalSteps = count($this->steps);

        $this->product = $service;

        //$this->stepsMenu = [];
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
                $array, [$this->item]
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
