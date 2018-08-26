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

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{id}','PostController@showPost');
Route::resource('/aboult','AboultController');
Route::get('/services','ServiceController@index');
//Route::get('/contacts','ContactController@index');
Route::resource('/contacts','ContactController');
