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
    Route::get('', 'SakramenBaptisAnakController@index');
	Route::post('/create', 'SakramenBaptisAnakController@store_baptis_anak');
});

Route::group(['prefix' => 'baptis-dewasa'], function(){
    Route::get('', 'SakramenBaptisDewasaController@index');
	Route::post('/create', 'SakramenBaptisDewasaController@store_baptis_dewasa');
});

Route::group(['prefix' => 'komuni-pertama'], function(){
    Route::get('', 'SakramenKomuniController@index');
	Route::post('/create', 'SakramenKomuniController@store_komuni');
});

Route::group(['prefix' => 'penguatan'], function(){
    Route::get('', 'SakramenPenguatanController@index');
	Route::post('/create', 'SakramenPenguatanController@store_penguatan');
});

Route::group(['prefix' => 'perkawinan'], function(){
    Route::get('', 'SakramenPerkawinanController@index');
	Route::post('/create', 'SakramenPerkawinanController@store_perkawinan');
});







Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'AdminController@index');
    // baptis anak
    Route::get('/baptis-anak', 'SakramenBaptisAnakController@show_baptis_anak');
	// Route::post('/create', 'KomuniController@store_komuni');
    Route::get('/form-edit/baptis-anak/{id}','SakramenBaptisAnakController@show_update');
    Route::post('/update/baptis-anak/{id}','SakramenBaptisAnakController@update_baptis_anak');
    // Route::post('/create', 'KomuniController@store_komuni');

    // baptis dewasa
    Route::get('/baptis-dewasa', 'SakramenBaptisDewasaController@show_baptis_dewasa');
    Route::get('/form-edit/baptis-dewasa/{id}','SakramenBaptisDewasaController@show_update');
    Route::post('/update/baptis-dewasa/{id}','SakramenBaptisDewasaController@update_baptis_dewasa');

    // sakramen perkawinan
    Route::get('/perkawinan', 'SakramenPerkawinanController@show_perkawinan');
    Route::get('/form-edit/perkawinan/{id}','SakramenPerkawinanController@show_update');
    Route::post('/update/perkawinan/{id}','SakramenPerkawinanController@update_sakramen_perkawinan');

    // sakramen komuni pertama
    Route::get('/komuni-pertama', 'SakramenKomuniController@show_komuni_pertama');
    Route::get('/form-edit/komuni-pertama/{id}','SakramenKomuniController@show_update');
    Route::post('/update/komuni-pertama/{id}','SakramenKomuniController@update_sakramen_komuni');


    // sakramen penguatan pertama
    Route::get('/penguatan','SakramenPenguatanController@show_penguatan');
    Route::get('/form-edit/penguatan/{id}','SakramenPenguatanController@show_update');
    Route::post('/update/penguatan/{id}','SakramenPenguatanController@update_sakramen_penguatan');
});