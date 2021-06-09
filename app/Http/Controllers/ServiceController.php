<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __invoke()
    {
        return view('admin.service-index',[
            'services' => Auth::user()->services
        ]);
    }
}

