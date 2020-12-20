<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Experience;


class WizardCreator extends Component
{


    public $currentStep;

    public $testAttr;

    public $product;

    protected $listeners  = [
        'saveAttribute'
    ];

    public function mount()
    {
        $this->product = Experience::find(1);
    }

    public function saveAttribute(array $attribute)
    {
      //  dd($attribute);

        $this->product->update($attribute);

        $this->testAttr = 'Actualizado !!!';
    }

    public function render()
    {
        return view('livewire.wizard-creator', [
            'steps' => collect([
                (object)['name' => 'Nombre de Producto', 'status' => 'completed', 'view' => 'Vista de ',],
                (object)['name' => 'Donde lo harás', 'status' => 'completed', 'view' => 'Vista de ',],
                (object)['name' => 'Tiempo de actividad', 'status' => 'incomplete', 'view' => 'Vista de ',],
                (object)['name' => 'Describe la actividad', 'status' => 'current', 'view' => 'Vista de ',],
                (object)['name' => 'Que incluyes?', 'status' => 'completed', 'view' => 'Vista de ',],

            ])
        ]);
    }
}
