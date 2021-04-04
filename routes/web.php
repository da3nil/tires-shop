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

Route::get('/', 'CalcController')->name('welcome');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('tires/search', 'TireController@search')->name('tires.search');

Route::resource('tires', 'TireController')->names('tires');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart/{id}/add', 'CartController@add')->name('cart.add');

Route::delete('/cart/{rowId}/del', 'CartController@del')->name('cart.del');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::get('/cart/clear', 'CartController@clear')->name('cart.clear');

Route::post('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
