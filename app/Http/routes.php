<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', '\App\Http\Controllers\PageController@showHome');
Route::get('/image/{id}', ['as' => 'singleImage' , 'uses' => 'PageController@showSingle']);
Route::get('/random', ['as' => 'random', 'uses' => 'PageController@showRandom']);
Route::get('/picks', ['as' => 'picks', 'uses' => 'PageController@showPicks']);
Route::get('/metaimage/{id}', ['as' => 'metaimage', 'uses' => 'MetaImageController@generate']);
