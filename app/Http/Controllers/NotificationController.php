<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __invoke()
    {

        return view('admin.notification', [
            'reviews' => \App\Models\User::find([4, 5, 6, 7])
        ]);
    }
}
