<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomePageController extends Controller
{
    public function __invoke()
    {
        //\Illuminate\Support\Facades\Auth::login(\App\Models\User::all()->random());

        return view('site.home', [
            'categories' => Category::onlyActive(),
        ]);
    }
}
