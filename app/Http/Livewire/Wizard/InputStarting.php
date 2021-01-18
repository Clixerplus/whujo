<?php

namespace App\Http\Livewire\Wizard;

use Livewire\Component;
use App\ValueObjcets\TimeVO;
use Illuminate\Database\Eloquent\Model as ProductModel;

class InputStarting extends Component
{
    const MIN_HOURS_LIMIT = 0;

    const MAX_HOURS_LIMIT = 16;

    const MINUTES_INTERVAL = [0, 15, 30, 45];

    public $product;

    public $product_hour;

    public $product_minute;

    /**
     * SearchableComponent constructor.
     *
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct($id);

        $this->setValidationRules();
    }

    public function mount(ProductModel $model = null)
    {
        $this->product = $model;

        $this->product_hour = $model->starting->hour;

        $this->product_minute = $model->starting->minute;
    }

    protected function setValidationRules(): void
    {
        $hourRules = sprintf('required|numeric|between:%s,%s', self::MIN_HOURS_LIMIT, self::MAX_HOURS_LIMIT);
        $minuteRules = sprintf('required|in:%s', implode(',', self::MINUTES_INTERVAL));

        $this->rules = [
            'product_hour' => $hourRules,
            'product_minute' => $minuteRules,
        ];
    }

    public function validateData()
    {
        return $this->validate();
    }

    public function save()
    {
        $this->validateData();

        $this->product->update([
            'starting' => $this->getStartingTime()
        ]);
    }

    private function getStartingTime(): TimeVO
    {
        return new TimeVO($this->product_hour, $this->product_minute);
    }

    public function render()
    {
        return view('livewire.wizard.input-starting', [
            'minHourLimit' => 0,
            'maxHourLimit' => 16,
            'minutesInterval' => self::MINUTES_INTERVAL
        ]);
    }
}
