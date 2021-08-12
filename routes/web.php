<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;
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
    'middleware' => ['auth'],
], function () {
    Route::get('admin', function () {
        return view('backend.welcome');
    });
    foreach (config('menu.menu') as $menu) {
        Route::resource($menu['slug'], str_replace(' ', '', ucwords(str_replace("-", " ", $menu['slug']) . 'Controller')));
    }
});

//santoshi
Route::get('/', [FrontEndController::class,'index'])->name('home');





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

// //  ------------------------
// //  ROUTE FOR MENUS
// //  ------------------------


// Route::resource('menu', 'MenuController');


// //  ------------------------
// //  ROUTE FOR ITEMS
// //  ------------------------


// Route::resource('item', 'ItemController');

// Route::get('/search', 'ItemController@search')->name('item.search');
// //Route::get('/cart','ItemController@addToCart')->name('addToCart');


// //  ------------------------
// //  ROUTE FOR CART
// //  ------------------------

// Route::resource('cart', 'CartController');

// Route::post('/cart/switchToSaveForLater/{id}', 'CartController@switchToSaveForLater')->name('cart.To.saveForLater');


// //  ------------------------
// //  ROUTE FOR SAVE FOR LATER
// //  ------------------------

// Route::resource('saveForLater', 'SaveForLaterController');

// Route::post('/wishlist/switchToCart/{id}', 'SaveForLaterController@switchToCart')->name('wishlist.To.cart');

// Route::get('/empty/saveforlater', function () {
//     Cart::instance('saveForLater')->destroy();
// })->name('empty.saveForLater');


// //  ------------------------
// //  ROUTE FOR CHECKOUT
// //  ------------------------

// Route::resource('checkout', 'CheckoutController');
// Route::get('/thankyou', 'CheckoutController@thankyou')->name('thankyou');



// //  ------------------------
// //  ROUTE FOR COUPOUNS
// //  ------------------------

// Route::resource('coupons', 'CouponsController');
// Route::post('/coupons/delete', 'CouponsController@delete')->name('coupons.delete');


// //  ------------------------
// //  ROUTE FOR CHECKING MAIL
// //  ------------------------

// Route::get('/mailable', function () {
//     $order= App\Order::findOrFail(6);
//     print_r($order);
//     // return (new App\Mail\OrderPlaced($order));
// });


// //  ------------------------
// //  ROUTE FOR MY-ORDERS
// //  ------------------------

// Route::get('/my-orders', 'OrderController@index')->name('orders.index');
