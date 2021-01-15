<?php

use App\Http\Livewire\ServiceBuilderWizard;
use App\Models\City;
use App\Models\State;
use App\Models\Service;
use App\Models\Experience;
use App\Http\Livewire\WizardCreator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index', [
        'services' => App\Models\Service::where('status', STATUS_PUBLISHED)->GET(),
        'experiences' => App\Models\Experience::where('status', STATUS_PUBLISHED)->GET()
    ]);
})->name('index');




Route::get('/listing', function () {
    return view('pages.listing');
})->name('search');

/*
Route::get('/creator2', function () {
    return view('profile.creator');
});
*/
Route::get('/product/{type}/{id}/{slug}', function ($type, $id) {

    if ($type == TYPE_SERVICE) {
        $product = Service::findOrFail($id);
    } else if ($type == TYPE_EXPERIENCE) {
        $product = Experience::findOrFail($id);
    }

    return view("pages.{$type}", compact('product'));
})->name('product');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/test', function () {

    return view('auth.auth-screen-layout');
});


Route::get('/services/{service}/create', ServiceBuilderWizard::class);
