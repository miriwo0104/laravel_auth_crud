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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/index', 'ContentController@index')->name('content.index');
Route::get('/create', 'ContentController@create')->name('content.create');
Route::post('/save', 'ContentController@save')->name('content.save');
Route::get('/detail/{content_id}', 'ContentController@detail')->name('content.detail');
Route::get('/edit/{content_id}', 'ContentController@edit')->name('content.edit');
Route::post('/update/{content_id}', 'ContentController@update')->name('content.update');
Route::get('/destroy/{content_id}', 'ContentController@destroy')->name('content.destroy');

/* Route::namespace('content.')->group(function () {
    Route::get('index', 'ContentController@index')->name('index');
    Route::get('create', 'ContentController@index')->name('create');
    Route::post('save', 'ContentController@index')->name('save');
    Route::get('detail', 'ContentController@index')->name('detail');
    Route::get('edit', 'ContentController@index')->name('edit');
    Route::post('update', 'ContentController@index')->name('update');
    Route::get('destroy', 'ContentController@index')->name('destroy');
}); */
