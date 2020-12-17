<?php

use App\Http\Livewire\WizardCreator;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index')->name('index');
Route::view('/2', 'index2')->name('index2');

Route::get('/creator', function () {
    return view('creator');
});


Route::get('/creator2', function () {
    return view('profile.creator');
});

Route::get('/product/{id}', function () {
    return 'Funciona';
})->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

