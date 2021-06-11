<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public string $viewForDisplay;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $view = '')
    {
        $this->viewForDisplay = $view;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.sidebar');
    }
}
