<?php

namespace App\Http\Livewire;

use Livewire\Request;
use App\Models\Service;
use Livewire\Component;

class Microservices extends Component
{
    public $service;

    public $microActivate = [];

    public $total;

    public function mount($service)
    {
        $this->service = $service;

        $this->total = $service->price;

        foreach ($service->microservices as $microservice) {
            $this->microActivate[$microservice->id] =  [
                'active' => false,
                'price'  => $microservice->price
            ];
        }
    }

    public function sumarRestar($id)
    {
        $this->microActivate[$id]['active'] = !$this->microActivate[$id]['active'];

        if ($this->microActivate[$id]['active']) {
            $this->total =  $this->total + $this->microActivate[$id]['price'];
        } else {
            $this->total = $this->total - $this->microActivate[$id]['price'];
        }

    }

    public function render()
    {
        return view('livewire.microservices');
    }
}
