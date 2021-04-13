<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WizardOptionsController extends Controller
{
    public function __invoke()
    {
        return view('admin.product-options');
    }
}
