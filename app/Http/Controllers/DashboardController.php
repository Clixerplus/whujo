<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function __invoke()
    {
        return view('account.dashboard');
    }
}
