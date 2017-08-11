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
	Route::post('create', 'mahasiswacontroller@create')->name('create');
	Route::get('create', 'mahasiswacontroller@create')->name('create');
	Route::post('store', 'mahasiswacontroller@store')->name('store');
	Route::get('show/{nim}', 'mahasiswacontroller@show')->name('show');
	Route::get('edit/{nim}', 'mahasiswacontroller@edit')->name('edit');
	Route::put('update/{nim}', 'mahasiswacontroller@update')->name('update');
	Route::delete('delete(/{nim}', 'mahasiswacontroller@destroy')->name('delete');
});

Auth::routes();


Route::group(['prefix'=>'home/nilai', 'middleware'=>'auth', 'as'=>'nilai.', 'name'=>'nilai'], function() {
	Route::get('/', 'nilaicontroller@index')->name('index');
	Route::get('create', 'nilaicontroller@create')->name('create');
	Route::post('store', 'nilaicontroller@store')->name('store');
	Route::get('show/{id_nilai}', 'nilaicontroller@show')->name('show');
	Route::get('edit/{nim}', 'nilaicontroller@edit')->name('edit');
	Route::put('update/{nim}', 'nilaicontroller@update')->name('update');
	Route::delete('delete(/{nim}', 'nilaicontroller@destroy')->name('delete');
	// Route::get('nilai', 'mahasiswacontroller@nilai')->name('nilai');
});
