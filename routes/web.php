<?php

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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
    Route::prefix('admin')->group(function () {
        Route::resource('buyout','buyoutController');
        Route::resource('buyout_detail','buyoutDetailController');
        Route::resource('client','ClientController');
        Route::resource('inventary','InventoryController');
        Route::resource('product','ProductController');
        Route::resource('provider','ProviderController');
        Route::resource('sale','SaleController');
        Route::resource('sale_detail','SaleDetailController');
        Route::resource('type_product','TypeProductController'); 
    });

   



