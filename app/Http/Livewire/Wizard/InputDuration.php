<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\ValueObjcets\TimeVO;
use App\Models\Experience as ProductModel;
use App\Http\Livewire\Traits\CanValidateStepChange;

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
        $this->product = ProductModel::all()->first();

        $this->product_hour = $this->product->duration->hour;

        $this->product_minute = $this->product->duration->minute;
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
