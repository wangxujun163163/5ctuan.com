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


//API
Route::group(['namespace' => 'Api','prefix' => '/v1.0'], function() {

    Route::get('/banners', 'BannersController@index');
    Route::post('/banners', 'BannersController@index');



});

