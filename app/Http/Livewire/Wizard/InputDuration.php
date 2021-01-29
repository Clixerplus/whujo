<?php

namespace App\Http\Livewire\Wizard;

use App\Http\Livewire\Traits\CanValidateStepChange;
use Livewire\Component;
use App\ValueObjcets\TimeVO;
use Illuminate\Database\Eloquent\Model as ProductModel;

class InputDuration extends Component
{
    use CanValidateStepChange;

    public $product;

    public $product_hour;

    public $product_minute;

    protected $listeners  = [
        'canChangeStep'
    ];

    protected $rules = [
        'product_hour' => 'required|numeric|between:0,16',
        'product_minute' => 'required|in:0,15,30,45',
    ];

    public function mount(ProductModel $model = null)
    {
        $this->product = $model;

        $this->product_hour = $model->duration->hour;

        $this->product_minute = $model->duration->minute;
    }

    public function save()
    {
        $this->validate();

        $this->product->update([
            'duration' => $this->getDuration()
        ]);
    }

    private function getDuration(): TimeVO
    {
        return new TimeVO($this->product_hour, $this->product_minute);
    }

    public function render()
    {
        return view('livewire.wizard.input-duration', [
            'hoursInterval' => 16,
            'minutesInterval' => [0, 15, 30, 45]
        ]);
    }
}
