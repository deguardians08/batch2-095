<?php

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
Route::get('/',function(){
	return view('table');
});
//Route::get('/', 'HomeController@getHome');
Route::get('/nama/{nama}', 'BarangController@getNama');
Route::get('/alamat', 'BarangController@getAlamat');
Route::get('/barang', 'BarangController@getBarang');
 