<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListinPageController extends Controller
{

    public function __invoke()
    {
        $productType = [
            ['title' => 'Services', 'value' => 'service'],
            ['title' => 'Experiences', 'value' => 'experience'],
            ['title' => 'Share a coffee', 'value' => 'share-a-coffee']
         ];

         dd('$productType');
        return view('pages.listing', compact('productType', 'categories'));
    }
}
