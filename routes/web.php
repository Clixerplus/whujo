<?php


use App\Models\Service;
use App\Models\Category;
use App\Models\Experience;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ServiceBuilderWizard;
use App\Http\Controllers\Site\IndexPageController;
use App\Http\Controllers\Account\DashboardController;
use App\Http\Controllers\Account\ServiceHostingController;
use App\Http\Controllers\Site\HomePageController;

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


Route::get('/', HomePageController::class)->name('home');



Route::get('/card', function () {
    return view('test', [
        'services'   => Service::with(['state', 'city', 'category'])
            ->where('status', STATUS_PUBLISHED)
            ->get(),

        'experiences' => Experience::with(['state', 'city', 'category'])
            ->where('status', STATUS_PUBLISHED)
            ->get(),

        'categories' => Category::all()
    ]);
});


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



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::group(['prefix' => 'service/hosting'], function () {
        //Route::get('listing', [ServiceHostingController::class, 'listing'])->name('service-listing');
        //Route::get('create/{service?}', [ServiceHostingController::class, 'create'])->name('service-create');
    });
});





Route::get('/test', function () {

    return view('auth.auth-screen-layout');
});


Route::get('/services/{service}/create', ServiceBuilderWizard::class);

Route::view('colortest', 'colortest');
