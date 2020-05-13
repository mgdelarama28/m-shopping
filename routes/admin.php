<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function() {
    Route::middleware('guest:admin')->group(function() {
        Route::namespace('Auth')->group(function() {
            Route::get('/login', 'LoginController@showLoginForm')->name('login');
            Route::post('/login', 'LoginController@login')->name('login');
        });
    });
    
    Route::middleware('auth:admin')->group(function() {
        Route::namespace('Auth')->group(function() {
            Route::post('/logout', 'LoginController@logout')->name('logout');
        });
        
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/admins', 'AdminController@index')->name('admins.index');
        Route::get('/admins/{id}', 'AdminController@show')->name('admins.show');
        Route::get('/admins/{id}/edit', 'AdminController@edit')->name('admins.edit');
        Route::post('/admins/{id}', 'AdminController@update')->name('admins.update');
    });
});