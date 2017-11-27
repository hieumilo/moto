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
    return view('index');
});

Route::group([
    'prefix' => 'admin', 
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function() {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('moto', 'MotoController');
});

Auth::routes();

Route::get('contact', 'HomeController@contact');
Route::get('{slug}', 'HomeController@getMotoByCategorySlug')->name('home.list');
Route::get('moto/{slug}', 'HomeController@getMotoBySlug');
