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


Route::get('form', 'studentController@form');

Route::post('store', 'studentController@store');

Route::get('details', 'studentController@details');

Route::get('edit/{id}','studentController@edit');

Route::post('update/{id}', 'studentController@update');

Route::get('delete/{id}', 'studentController@delete');
