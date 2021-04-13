<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function __invoke()
    {
        return view('admin.setup');
    }
}
