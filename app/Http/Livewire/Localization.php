<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class Localization extends Component
{
    public $lang;

    public function __construct($id)
    {
        parent::__construct($id);
        $this->lang = App::getLocale();
    }

    public function render()
    {
        App::setLocale($this->lang);
        session()->put('locale', $this->lang);
        return view('livewire.localization');
    }
}
