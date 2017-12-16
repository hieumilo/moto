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

Route::get('/', 'HomeController@index');

Route::group([
    'prefix' => 'admin', 
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function() {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('moto', 'MotoController');
    Route::resource('contact', 'ContactController');
});

Auth::routes();

Route::get('contact', 'ContactController@index')->name('home.contact.index');
Route::post('contact', 'ContactController@store')->name('home.contact.store');
Route::get('search', 'HomeController@search')->name('home.search');
Route::get('{slug}', 'HomeController@getMotoByCategorySlug')->name('home.list');
Route::get('moto/{slug}', 'HomeController@getMotoBySlug')->name('moto.detail');
