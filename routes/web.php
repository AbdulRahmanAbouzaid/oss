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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ProductController@index');



Route::get('/register', 'AuthController@showRegisterForm');
Route::post('/register', 'AuthController@register');

Route::get('/login', 'AuthController@showLoginForm');
Route::post('/login', 'AuthController@login')->name('login');

Route::post('/products/add-to-cart', 'ProductController@addProducts');

Route::get('/orders/{order}', 'OrderController@show');
Route::get('/order/destroy', 'OrderController@destroy');
Route::get('/orders/{order}/bill', 'OrderController@generateBill');
