<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('login', 'Api\UserController@login')->name('login');
Route::post('create', 'Api\UserController@create')->name('create.user');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'Api\UserController@details');

});


//Route::resource('/market','MarketController');
Route::prefix('poster')->group(function(){
	Route::get('','PosterController@index')->name('posters');
	//Route::middleware('auth:api')->get('','PosterController@index')->name('posters');
	Route::post('/create','PosterController@create')->name('create.poster');
});