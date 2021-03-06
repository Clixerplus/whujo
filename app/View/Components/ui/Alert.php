<?php

namespace Components\UI;

use Illuminate\View\Component;

class Alert extends Component
{
    const COLOR = [
        'success' => 'green',
        'danger'  => 'red',
        'info'    => 'blue',
        'default' => 'primary'
    ];

    const ICON = [
        'success' => 'icon-checkmark-outline',
        'danger'  => 'icon-close-outline',
        'info'    => 'icon-alert-outline',
        'default' => 'icon-whujo'
    ];

    public string $color;

    public string $icon;

    public string $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type = "default", $id = 'alert')
    {
        $this->color  = self::COLOR[$type];

        $this->icon   = self::ICON[$type];

        $this->id     = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ui.alert');
    }
}
