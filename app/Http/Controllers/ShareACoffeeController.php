<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShareACoffeeController extends Controller
{
    public function __invoke()
    {
        return view('backoffice.product-index',[
            'productType' => 'Share a Coffee',
            'products' => Auth::user()->shareACoffees
        ]);
    }
}
