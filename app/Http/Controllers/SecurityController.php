<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function __invoke()
    {
        return view('admin.security');
    }
}
