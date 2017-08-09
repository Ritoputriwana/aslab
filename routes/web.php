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

Route::group(['prefix'=>'home/aslab', 'middleware'=>'auth', 'as'=>'aslab.', 'name'=>'aslab'], function() {
	Route::get('/', 'mahasiswacontroller@index')->name('index');
	Route::get('create', 'mahasiswacontroller@create')->name('create');
	Route::post('store', 'mahasiswacontroller@store')->name('store');
	Route::get('show/{id}', 'mahasiswacontroller@show')->name('show');
	Route::get('edit/{id}', 'mahasiswacontroller@edit')->name('edit');
	Route::put('update/{id}', 'mahasiswacontroller@update')->name('update');
	Route::get('delete(/{id}', 'mahasiswacontroller@destroy')->name('delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
