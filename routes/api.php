<?php


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

Route::post('/login', 'Auth\LoginController@authenticate');

Route::middleware('jwt')->get('/contacts', 'ContactController@index');
Route::middleware('jwt')->post('/contacts', 'ContactController@store');
Route::middleware('jwt')->get('/contacts/{id}', 'ContactController@show');
Route::middleware('jwt')->put('/contacts/{id}', 'ContactController@update');
Route::middleware('jwt')->delete('/contacts/{id}', 'ContactController@destroy');
