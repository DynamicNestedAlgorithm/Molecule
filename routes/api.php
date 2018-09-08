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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('messages', 'MessageController@index');
    Route::post('messages', 'MessageController@store');
    Route::get('messages/{id}', 'MessageController@show');
    Route::post('messages/{id}/read', 'MessageController@updateLastReadAt');
    Route::put('messages/{id}', 'MessageController@update');
    Route::delete('messages/{id}', 'MessageController@deleteThreadFromList');
    Route::get('messages/{id}/messages', 'MessageController@threadMessages');

});
