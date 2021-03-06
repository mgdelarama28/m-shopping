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

Route::get('/', 'Web\\LandingPageController@index')->name('landing_page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', 'Web\\PageController@product')->name('product');
Route::get('/cart', 'Web\\PageController@cart')->name('cart');
Route::get('/category_products', 'Web\\PageController@categoryProducts')->name('category_products');