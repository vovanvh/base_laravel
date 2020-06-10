<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/account', 'AccountController@edit')->name('account_edit');
Route::post('/account', 'AccountController@update')->name('account_update');
Route::post('/account/reset', 'AccountController@reset')->name('account_reset');
Route::get('/profile', 'ProfileController@edit')->name('profile_edit');
Route::post('/profile', 'ProfileController@update')->name('profile_update');
