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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nilai', function () {
    return view('nilai.nilai');
});

Route::group(['prefix'=>'home/mahasiswa', 'middleware'=>'auth', 'as'=>'mahasiswa.', 'name'=>'mahasiswa'], function() {
	Route::get('/', 'mahasiswacontroller@index')->name('index');
	Route::get('create', 'mahasiswacontroller@create')->name('create');
	Route::post('store', 'mahasiswacontroller@store')->name('store');
	Route::get('show/{id}', 'mahasiswacontroller@show')->name('show');
	Route::get('edit/{id}', 'mahasiswacontroller@edit')->name('edit');
	Route::put('update/{id}', 'mahasiswacontroller@update')->name('update');
	Route::get('delete(/{id}', 'mahasiswacontroller@destroy')->name('delete');
	// Route::get('nilai', 'mahasiswacontroller@nilai')->name('nilai');
});
Auth::routes();


Route::group(['prefix'=>'home/nilai', 'middleware'=>'auth', 'as'=>'aslab.', 'name'=>'aslab'], function() {
	Route::get('/', 'nilaicontroller@index')->name('index');
	Route::get('create', 'nilaicontroller@create')->name('create');
	Route::post('store', 'nilaicontroller@store')->name('store');
	Route::get('show/{id}', 'nilaicontroller@show')->name('show');
	Route::get('edit/{id}', 'nilaicontroller@edit')->name('edit');
	Route::put('update/{id}', 'nilaicontroller@update')->name('update');
	Route::get('delete(/{id}', 'nilaicontroller@destroy')->name('delete');
	// Route::get('nilai', 'mahasiswacontroller@nilai')->name('nilai');
});
