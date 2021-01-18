<?php

namespace App\Http\Livewire\Wizard;

use App\Models\Service;
use Livewire\Component;

class InputFeatures extends Component
{
    const MINIMUM_CHARS = 5;

    public Service $service;

    public $feature;

    protected $rules = [
        'feature' => 'required|string|min:'. self::MINIMUM_CHARS
    ];

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    public function addFeatureToList()
    {
        $this->validate();

        $tempFeatures = $this->service->features;

        $this->service->features = array_merge(
            $tempFeatures,
            [$this->feature]
        );

        $this->service->save();

        $this->reset('feature');
    }

    public function removeFeatureFromList($index)
    {
        $tempfeatures = $this->service->features;

        unset($tempfeatures[$index]);

        $this->service->features = $tempfeatures;

        $this->service->save();
    }

    public function render()
    {
        return view('livewire.wizard.input-features',[
            'features' => $this->service->features
        ]);
    }
}
