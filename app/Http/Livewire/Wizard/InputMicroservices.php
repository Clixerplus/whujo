<?php

namespace App\Http\Livewire\Wizard;

use App\Models\Microservice;
use App\Models\Service;
use Livewire\Component;

class InputMicroservices extends Component
{
    const MIN_NAME_LENGHT = 5;

    const MAX_NAME_LENGHT = 50;

    const MIN_DESCRIPTION_LENGHT = 30;

    const MAX_DESCRIPTION_LENGHT = 300;

    const MINIMUM_PRICE = 500;

    public $service;

    public $name;

    public $description;

    public $price;

    protected $rules = [
        'name' => 'required|string|between:' . self::MIN_NAME_LENGHT . ',' . self::MAX_NAME_LENGHT,
        'description' => 'required|string|between:' . self::MIN_DESCRIPTION_LENGHT . ',' . self::MAX_DESCRIPTION_LENGHT,
        'price' => 'required|numeric|min:' . self::MINIMUM_PRICE
    ];

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    public function addMicroserviceToList()
    {
        $this->service->microservices()->save(
            new Microservice($this->validate())
        );

        $this->reset('name', 'description', 'price');
    }

    public function deleteMicroservice($id)
    {
        Microservice::destroy($id);
    }

    public function render()
    {
        return view('livewire.wizard.input-microservices');
    }
}
