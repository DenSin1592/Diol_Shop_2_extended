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
Route::get('/', function () {
    return redirect('/products');
});
Route::namespace('Shop')->group(function (){
    Route::get('/products', 'ProductsController@showProducts')->name('products');
    Route::get('/product/{id}', 'ProductController@showProduct')->name('product');
});

//Route::fallback('Shop\ProductsController@showProducts');

