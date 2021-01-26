<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __invoke()
    {
        return view('site.home', [
            'categories' => Category::onlyActive(),
        ]);
    }
}
