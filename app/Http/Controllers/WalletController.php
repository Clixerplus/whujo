<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __invoke()
    {
        return view('admin.wallet');
    }
}

