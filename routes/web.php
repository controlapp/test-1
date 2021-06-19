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

Route::group([],function(){

	Route::get('/','HomeController@index')->name('test.home');
	Route::post('/login','LoginController@login')->name('test.login');
	Route::get('/login','LoginController@login')->name('test.index');
	Route::get('/logout','LoginController@logout')->name('test.logout');
	Route::get('{path}','ProductosController@index')->name('test.producto');
});





