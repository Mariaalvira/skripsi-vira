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

Route::get('/baptis-anak', function () {
    return view('content.form.baptis_anak');
});

Route::get('/baptis-dewasa', function () {
    return view('content.form.baptis_dewasa');
});

Route::get('/keterangan-perkawinan', function () {
    return view('content.form.keterangan_perkawinan');
});

Route::get('/pengurapan-orang-sakit', function () {
    return view('content.form.pengurapan_orang_sakit');
});

Route::get('/dashboard-admin', function () {
    return view('content.admin.tabel_bayar');
});
Route::prefix('sakramen')->group(function(){
	Route::post('/baptis_anak', 'SakramenController@store_baptis_anak');

});

Route::get('/upload', function () {
    return view('upload');
});

Route::prefix('sakramen')->group(function(){
	Route::post('/Upload', 'UploadController@store_upload');

});


Route::get('/sakramen/edit/{id}','SakramenController@edit'); 

Route::post('/sakramen/edit','SakramenController@update');


// Route::get('/sakramen/admin', 'SakramenController@store_baptis_anak')name('');

// Auth::routes();

Route::middleware('auth:akun')->group(function(){
Route::get('admin/login', 'AkunController@getlogin')->name('admin.login');
Route::post('admin/login', 'AkunController@postlogin');
});



Route::get('/home', 'HomeController@index')->name('home');
