<?php

use App\Http\Controllers\Backend\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FrontEndController;

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

//prabin


Route::group([
    'namespace' => 'Backend',
    'middleware' => ['auth', 'admin'],
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', function () {
        return view('backend.welcome');
    })->name('admin');

    foreach (config('menu.menu') as $menu) {
        Route::resource($menu['slug'], str_replace(' ', '', ucwords(str_replace("-", " ", $menu['slug']) . 'Controller')));
    }
    Route::get('changestatus/{id}', 'OrderController@changeStatus')->name('changestatus');
});
Route::view('profile', 'profile.show')->name('profile');
Route::get('sendsms','OrderController@sendSms');


//santoshi
Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/contact-us', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/about-us', [FrontEndController::class, 'about'])->name('about');
Route::get('/terms-and-conditions', [FrontEndController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [FrontEndController::class, 'privacy'])->name('privacy');
Route::get('/gallery', [FrontEndController::class, 'gallery'])->name('gallery');
Route::get('/menu', [FrontEndController::class, 'menu'])->name('menu');
Route::get('/item/{id}', [FrontEndController::class, 'itemByMenu'])->name('itemByMenu');
Route::get('/all-items', [FrontEndController::class, 'allItems'])->name('allItems');
Route::get('/single-item/{id}', [FrontEndController::class, 'singleItem'])->name('singleItem')->whereNumber('id');


// Route::get('/search', 'ItemController@search')->name('item.search');


//  ------------------------
//  ROUTE FOR CART
//  ------------------------

Route::resource('cart', 'CartController');

//  ------------------------
//  ROUTE FOR CHECKOUT
//  ------------------------

Route::resource('checkout', 'CheckoutController');
Route::get('/thankyou', 'CheckoutController@thankyou')->name('thankyou');

//  ------------------------
//  ROUTE FOR ORDERS
//  ------------------------

Route::resource('order', 'OrderController');


//  -------------------------------
//  ROUTE FOR ORDERS AND PAYMENTS
//  -------------------------------

Route::get('/paypal/checkout-success/{success}', 'PayPalPaymentController@paymentSuccess')->name('paypal.success');
Route::get('/paypal/checkout-cancel', 'PayPalPaymentController@cancelPage')->name('paypal.cancel');
