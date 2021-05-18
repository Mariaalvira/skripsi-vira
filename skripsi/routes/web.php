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
    return view('home');
});

Route::group(['prefix' => 'baptis-anak'], function(){
    Route::get('', 'BaptisAnakController@index');
	Route::post('/create', 'BaptisAnakController@store_baptis_anak');
});

Route::group(['prefix' => 'baptis-dewasa'], function(){
    Route::get('', 'BaptisDewasaController@index');
	Route::post('/create', 'BaptisDewasaController@store_baptis_dewasa');
});

Route::group(['prefix' => 'komuni-pertama'], function(){
    Route::get('', 'KomuniController@index');
	Route::post('/create', 'KomuniController@store_komuni');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('', 'AdminController@index');
    // baptis anak
    Route::get('/baptis-anak', 'BaptisAnakController@show_baptis_anak');
	// Route::post('/create', 'KomuniController@store_komuni');

    // baptis dewasa
    Route::get('/baptis-dewasa', 'BaptisDewasaController@show_baptis_dewasa');
});
