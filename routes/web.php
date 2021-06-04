<?php

use App\Models\Service;
use App\Models\Experience;
use App\Models\Microservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\ServiceBuilderWizard;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Site\HomePageController;
use App\Http\Controllers\WizardOptionsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Site\ListinPageController;


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

Route::view('/about', 'site.landing-page1')->name('about-landing');

Route::get('/meet/room/{link}', function ($link) {
    return view('site.meet-room', ['link' => $link]);
})->name('meet-room');

Route::post('/payment', CheckoutController::class)->name('payment');
Route::get('/checkout', function (Request $request) {

    $service = Service::find(100);
    $microservices = $service->microservices() ?? collect();

    $date = now()->addDay()->format('d/m/Y');
    $time = Carbon\Carbon::create('08:00 PM')->format('h:i A');

    isset($microservices)
        ? $total = $service->price + $microservices->sum('price')
        : $total = $service->price;

    // Agrega credenciales

    MercadoPago\SDK::setAccessToken('TEST-6889998068947570-042822-1a778215c35571c2e644239081ccb00a-743765778');
    //MercadoPago\SDK::setPublicKey('TEST-11209421-0e59-404f-869f-4fddea1e3fea');
    //MercadoPago\SDK::setAccessToken(env('MERCADOPAGO_ACCESS_TOKEN'));

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = $service->name;
    $item->quantity = 1;
    $item->unit_price = 1000;

    //Crea al payer que hace el pago
    $user = App\Models\User::find(2);
    $payer = new MercadoPago\Payer();
    $payer->name = $user->name;
    $payer->email = $user->email;
    $payer->date_created = $user->created_at;
    $payer->identification = array(
        "type" => "DNI",
        "number" => "12345678"
    );

    $payer->address = array(
        "street_name" => "Cuesta Miguel Armendáriz",
        "street_number" => 1004,
        "zip_code" => "11020"
    );

    $preference->items = array($item);
    $preference->back_urls = [
        "success" => 'http://localhost/success', //route('checkout.thanks'),
        "pending" => route('checkout.pending'),
        "failure" => route('checkout.error'),
    ];
    $preference->binary_mode = true;
    $preference->marketplace_fee = $item->unit_price * 0.05;
    $preference->statement_descriptor = env('APP_NAME');
    $preference->auto_return = "all";
    $preference->save();
    //dd($preference);

    return view('pages.checkout', compact('service', 'microservices', 'date', 'time', 'total', 'preference'));
})->name('checkout');

Route::get('success', function () {
    $response = Http::withHeaders([
        'Authorization' => 'Bearer TEST-6889998068947570-041601-3ea0d8106e16c0556e29d80593e6787c-744459939'
    ])->get('https://api.mercadopago.com/v1/payments/' . request()->input('payment_id'));
    return view('pages.payment',  ['response' => json_decode($response->body())]);
})->name('checkout.thanks');
Route::get('checkout/pending', function () {
    return 'Pending';
})->name('checkout.pending');
Route::get('checkout/error', function () {
    return 'Error';
})->name('checkout.error');

Route::get('checkout/ipn', function () {
    return 'IPN';
})->name('ipn');

Route::get('authorization', function (Request $request) {
    return $request->all();
})->name('autorization');


Route::get('product-test', function () {
    //TODO: Eliminar luego de pruebas
    $product = Service::findOrFail(100);
    return view("pages.services", compact('product'));
})->name('product-service-test');




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



Route::view('icons', 'tests.icons');







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
