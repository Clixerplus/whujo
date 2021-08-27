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


        if (!session()->has('locale')) {
            session()->put('locale', config('app.locale'));
        }

        $this->lang = session()->get('locale');
    }

    public function render()
    {

        session()->put('locale', $this->lang);
        return view('livewire.localization');
    }
}
