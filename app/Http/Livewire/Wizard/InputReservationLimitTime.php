<?php

namespace App\Http\Livewire\Wizard;

use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputReservationLimitTime extends StepBuilderWizard
{
    const INTERVALS = [
        0, 1, 2, 3, 4, 5, 6, 12, 24, 48, 72
    ];

    protected $rules;

    protected function setValidationRules(): void
    {
        $rule = sprintf('required|in:%s', implode(',', self::INTERVALS));

        $this->rules = [
            'product.reservationLimitTime' => $rule
        ];
    }

    public function render()
    {
        return view(
            'livewire.wizard.input-reservation-limit-time',
            [
                'intervals' => self::INTERVALS
            ]
        );
    }
}
