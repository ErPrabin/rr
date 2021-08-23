<?php

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
    'middleware' => ['auth','admin'],
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', function () {
        return view('backend.welcome');
    })->name('admin');
    foreach (config('menu.menu') as $menu) {
        Route::resource($menu['slug'], str_replace(' ', '', ucwords(str_replace("-", " ", $menu['slug']) . 'Controller')));
    }
});
Route::view('profile', 'profile.show')->name('profile');

//santoshi
Route::get('/', [FrontEndController::class,'index'])->name('home');
Route::get('/contact-us', [FrontEndController::class,'contact'])->name('contact');
Route::get('/about-us', [FrontEndController::class,'about'])->name('about');
Route::get('/terms-and-conditions', [FrontEndController::class,'terms'])->name('terms');
Route::get('/privacy-policy', [FrontEndController::class,'privacy'])->name('privacy');
Route::get('/gallery', [FrontEndController::class,'gallery'])->name('gallery');
Route::get('/menu', [FrontEndController::class,'menu'])->name('menu');
Route::get('/item/{id}', [FrontEndController::class,'itemByMenu'])->name('itemByMenu');
Route::get('/all-items', [FrontEndController::class,'allItems'])->name('allItems');
Route::get('/single-item/{id}', [FrontEndController::class,'singleItem'])->name('singleItem')->whereNumber('id');


// //  ------------------------
// //  ROUTE FOR USER INFO
// //  ------------------------

// //Route::get('profile/edit','UserController@edit');
// Route::get('profile/edit', 'UserController@edit')->name('userinfo.edit');

// Route::post('profile/edit', 'UserController@userinfoupdate')->name('userinfo.edit');

// Route::get('password/edit', 'UserController@passwordedit')->name('password.edit');

// Route::post('password/edit', 'UserController@password_edit')->name('password.edit');

// Route::get('/profile/picture/update', 'UserController@imageupload')->name('propicupdate');

// Route::post('/profile/picture/update', 'UserController@imageupdate')->name('propicupdate');

// Route::get('/profile', 'UserController@profile')->name('profile');


//  ------------------------
//  ROUTE FOR ITEMS
//  ------------------------


// Route::get('/search', 'ItemController@search')->name('item.search');


//  ------------------------
//  ROUTE FOR CART
//  ------------------------

Route::resource('cart', 'CartController');

// Route::post('/cart/switchToSaveForLater/{id}', 'CartController@switchToSaveForLater')->name('cart.To.saveForLater');


// //  ------------------------
// //  ROUTE FOR SAVE FOR LATER
// //  ------------------------

// Route::resource('saveForLater', 'SaveForLaterController');

// Route::post('/wishlist/switchToCart/{id}', 'SaveForLaterController@switchToCart')->name('wishlist.To.cart');

// Route::get('/empty/saveforlater', function () {
//     Cart::instance('saveForLater')->destroy();
// })->name('empty.saveForLater');


//  ------------------------
//  ROUTE FOR CHECKOUT
//  ------------------------

Route::resource('checkout', 'CheckoutController');
Route::get('/thankyou', 'CheckoutController@thankyou')->name('thankyou');

//  ------------------------
//  ROUTE FOR ORDERS
//  ------------------------

Route::resource('order', 'OrderController');

// //  ------------------------
// //  ROUTE FOR COUPOUNS
// //  ------------------------

// Route::resource('coupons', 'CouponsController');
// Route::post('/coupons/delete', 'CouponsController@delete')->name('coupons.delete');


// Route::get('/my-orders', 'OrderController@index')->name('orders.index');
