<?php

use App\Models\Service;
use App\Models\Experience;
use App\Http\Livewire\WizardCreator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\ServiceBuilderWizard;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Site\HomePageController;
use App\Http\Controllers\WizardOptionsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\MercadopagoController;
use App\Http\Controllers\Site\ListinPageController;
use App\Models\Microservice;
use Illuminate\Http\Request;

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



Route::get('/', HomePageController::class);
Route::get('/home', HomePageController::class)->name('home');

Route::get('/listing', ListinPageController::class)->name('listing-product');

Route::post('/checkout', function () {
    $service = Service::find(request()->input('serviceId'));
    $microservices = Microservice::find(request()->input('microservices')) ?? collect();
    $date = request()->input('date');
    $time = request()->input('hours') . ':' . request()->input('minutes') . ' ' . request()->input('ampm');

    isset($microservices)
        ? $total = $service->price + $microservices->sum('price')
        : $total = $service->price;



    return view('pages.checkout', compact('service', 'microservices', 'date', 'time', 'total'));
})->name('checkout');

Route::post('/booking/services/', function () {

    //return $request->all();
})->name('booking.services');

Route::get('/product/{type}/{id}/{slug}', function ($type, $id) {

    if ($type == TYPE_SERVICE) {
        $product = Service::findOrFail($id);
    } else if ($type == TYPE_EXPERIENCE) {
        $product = Experience::findOrFail($id);
    }

    return view("pages.{$type}", compact('product'));
})->name('product');


/* Route::post('/mercadopago', function () {
    return view('pages.mercadopago');
})->name('mercadopago');
 */

Route::get('/mercadopagoa', MercadopagoController::class)->name('mercadopago');









Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::resource('roles', RolesController::class);
    Route::resource('users', UserController::class);
});

//Route::resource('categories', CategoryController::class);



Route::get('/navbar', function () {
    return view('test');
});


Route::get('/listing', function () {
    return view('pages.listing');
})->name('search');

/*
Route::get('/creator2', function () {
    return view('profile.creator');
});
*/


Route::resource('categories', CategoryController::class);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //auth()->login(App\Models\User::first());
    
    Route::get('/dashboard', DashboardController::class)->name('account.dashboard');
    Route::get('/notificaciones', NotificationController::class)->name('account.notifications');
    Route::get('/reservaciones', DashboardController::class)->name('account.booking');
    Route::get('/wallet', WalletController::class)->name('account.wallet');
    Route::get('/reviews', ReviewController::class)->name('account.reviews');
    Route::get('/configuracion', SetupController::class)->name('account.setup');
    Route::get('/seguridad', SecurityController::class)->name('account.security');
    Route::get('/wizard/options/', WizardOptionsController::class)->name('wizard.options');
    Route::get('/service/index/', ServiceController::class)->name('service.index');


    Route::group(['prefix' => 'service/hosting'], function () {
        //Route::get('listing', [ServiceHostingController::class, 'listing'])->name('service-listing');
        // Route::get('create/{service?}', [ServiceHostingController::class, 'create'])->name('service-create');
    });

    Route::group(['prefix' => 'admin'], function () {
    });
});

Route::get('testform', function () {/*  */
    return view('testform');
});

Route::get('dashtest', function () {
    return view('account.dashboardmain');
});

//Route::get('dashboard', DashboardController::class);





Route::get('/test', function () {

    return view('auth.auth-screen-layout');
});


Route::get('/services/{service}/create', ServiceBuilderWizard::class)->name('wizard.service.create');

Route::view('colortest', 'colortest');

Route::get('test-search', function () {
    return view('tests.test-search');
});

/*

Route::get('account')->group('account', function () {
    Route::get('dashboard', [AccountDashboard::class, 'dashboard']);
    Route::get('profile',   [AccountDashboard::class, 'profile']);
    Route::get('notification', [AccountDashboard::class, 'dashboard']);
});
 */
