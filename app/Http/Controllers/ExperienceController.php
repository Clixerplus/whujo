<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function __invoke()
    {
        return view('backoffice.product-index',[
            'productType' => 'Experiences',
            'products' => Auth::user()->experiences
        ]);
    }
}

