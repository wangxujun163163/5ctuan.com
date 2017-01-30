<?php
//use  App\Http\Controllers\Auth\LoginController;
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
    return view('index/index');
});

Route::get('/list', function () {
    return view('list/list');
});

Route::get('/detail', function () {
    return view('detail/detail');
});


//     Auth::routes();
//     Route::group(['middleware' => 'auth'], function () {
//         Route::get('/', 'BannersController@index');
//         Route::get('home', 'BannersController@index');
//         Route::get('device', 'BannersController@device');
//         Route::post('banners/create', 'BannersController@create');
//         Route::post('banners/{id}/open', 'BannersController@open');
//         Route::post('banners/{id}/close', 'BannersController@close');
//         Route::resource('banners', 'BannersController');



//     });

// Route::group(['prefix' => '/backend', 'middleware' => 'web'], function () {
// 	Auth::routes();
//     Route::group(['middleware' => 'auth'], function () {
//     	Route::get('/', 'BannersController@index');
//         Route::get('home', 'BannersController@index');
//         Route::get('device', 'BannersController@device');
//         Route::post('banners/create', 'BannersController@create');
//         Route::post('banners/{id}/open', 'BannersController@open');
//         Route::post('banners/{id}/close', 'BannersController@close');
//         Route::resource('banners', 'BannersController');



//     });
// });


