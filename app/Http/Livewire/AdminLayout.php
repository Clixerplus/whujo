<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;

class AdminLayout extends Component
{
    public string $view;

    public function mount($view)
    {
        $this->loadView($view);
    }

    public function render()
    {
        return view('livewire.admin-layout')
            ->layout('layouts.backoffice');
    }

    public function loadView($view)
    {
        $this->view = "backoffice.{$view}";

        if (!View::exists($this->view)) {
            abort(404);
        }
    }
}
