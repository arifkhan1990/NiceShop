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

<<<<<<< HEAD
Route::get('/', 'LandingPageController@index')->name('landing-page');;
Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');
Route::view('/cart','cart');
Route::view('/checkout','checkout');
Route::view('/thankyou','thankyou');
=======
Route::view('/', 'main');
Route::view('/products', 'products');
Route::view('/product', 'product');
Route::view('/cart','cart');
Route::view('/checkout','checkout');
Route::view('/thankyou','thankyou');

>>>>>>> 01bd6ddef302ba34fbd0418ecb4b5ce1f15c5f07
