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
    Route::get('/index', 'Api\ContentController@index')->name('api_content.index');
    Route::post('/save', 'Api\ContentController@save')->name('api_content.save');
    Route::get('/detail/{content_id}', 'Api\ContentController@detail')->name('api_content.detail');
    Route::post('/update/{content_id}', 'Api\ContentController@update')->name('api_content.update');
    Route::get('/destroy/{content_id}', 'Api\ContentController@destroy')->name('api_content.destroy');
});