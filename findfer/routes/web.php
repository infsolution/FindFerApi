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
//Auth::routes();
Route::get('/', 'PostController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{id}','PostController@showPost');
Route::resource('/aboult','AboultController');
Route::get('/services','ServiceController@index');
//Route::get('/contacts','ContactController@index');
Route::resource('/contacts','ContactController');


Route::get('/login','Admin\Auth\LoginController@login')->name('login');
Route::get('/register','Admin\Auth\LoginController@register')->name('register');
Route::get('/login','Admin\Auth\LoginController@login')->name('login');
Route::get('/logout','Admin\Auth\LoginController@logout')->name('logout');
Route::get('/password/email','Admin\Auth\LoginController@logout')->name('password.email');
Route::get('/password/request','Admin\Auth\LoginController@logout')->name('password.request');

Route::prefix('admin')->group(function(){
	Route::get('/home','Admin\AdminController@index')->name('admin.home');
	Route::get('/login','Admin\Auth\LoginController@index')->name('admin.index');
	Route::post('/login','Admin\Auth\LoginController@login')->name('admin.login');
	Route::get('/register','Admin\Auth\RegisterController@showFormCreate')->name('admin.register');
	Route::post('/register','Admin\Auth\RegisterController@create')->name('admin.register.submit');
	Route::post('/logout','Admin\Auth\LoginController@logout')->name('admin.logout');
});


Route::resource('/market','MarketController');

