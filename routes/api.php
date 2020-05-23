<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('stations', 'API\StationsController@index');
Route::get('stations/{city}', 'API\StationsController@index');
Route::get('stations/{station}', 'API\StationsController@show');
Route::post('stations', 'API\StationsController@store');
Route::put('stations/{station}', 'API\StationsController@update');
Route::delete('stations/{station}', 'API\StationsController@delete');
