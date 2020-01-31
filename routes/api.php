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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/locations', 'LocationController@index');
Route::get('/locations/{location}', 'LocationController@show');
Route::post('/locations', 'LocationController@store');
Route::post('/locations/{location}', 'LocationController@update');
Route::delete('/locations/{location}', 'LocationController@destroy');

Route::get('/users', 'UserController@index');

// Route::get('/user/{user}/locations', 'LocationController@index');
// Route::get('/user/{user}/locations/{location}', 'LocationController@show');
// Route::post('/user/{user}/locations', 'LocationController@store');
// Route::put('/user/{user}/locations/{location}', 'LocationController@update');
// Route::delete('/user/{user}/locations/{location}', 'LocationController@delete');
