<?php

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


Route::group([
    'namespace' => 'Backend',
    'middleware' => ['auth'],
], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    foreach (config('menu.menu') as $menu) {
        Route::resource($menu['slug'], str_replace(' ', '', ucwords(str_replace("-", " ", $menu['slug']) . 'Controller')));
    }
});
