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

Route::group(['middleware' => ['api']], function() {
    Route::get('/api/index', 'Api\ContentController@index')->name('content.index');
    Route::post('/api/save', 'Api\ContentController@save')->name('content.save');
    Route::get('/api/detail/{content_id}', 'Api\ContentController@detail')->name('content.detail');
    Route::post('/api/update/{content_id}', 'Api\ContentController@update')->name('content.update');
    Route::get('/api/destroy/{content_id}', 'Api\ContentController@destroy')->name('content.destroy');
});