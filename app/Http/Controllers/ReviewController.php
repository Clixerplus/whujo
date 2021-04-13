<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __invoke()
    {
        return view('admin.reviews');
    }
}

