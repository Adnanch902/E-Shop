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
    return view('eshop');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eshop', 'eshopController@index')->name('eshop');
Route::get('/ContactUs', 'ContactUsController@index')->name('ContactUs');
Route::get('/AboutUs', 'AboutUsController@index')->name('AboutUs');