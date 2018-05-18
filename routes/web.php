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



Route::get('/ventas', function () {
    return view('sale.index');
});
Route::get('/inventarios', function () {
    return view('warehouse.index');
});
Route::get('/pedidos', function () {
    return view('buyout.index');
});
Route::get('/productos', function () {
    return view('product.index');
});
    Route::prefix('admin')->group(function () {
        Route::resource('compra','buyoutController');
        Route::resource('detallecompra','buyoutDetailController');
        Route::resource('cliente','ClientController');
        Route::resource('inventario','InventoryController');
        Route::resource('producto','ProductController');
        Route::resource('proveedor','ProviderController');
        Route::resource('venta','SaleController');
        Route::resource('detalleventa','SaleDetailController');
        Route::resource('tipoproducto','TypeProductController'); 
    });

    Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
