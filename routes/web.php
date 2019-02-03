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

Route::get('/', 'CustomerController@index');
Route::get('create','CustomerController@create');
Route::get('/{id}','CustomerController@show');
Route::post('create/sale','CustomerController@store');
Route::get('edit/{id}', 'CustomerController@edit');
Route::delete('deletes/{id}', 'CustomerController@destroy');
Route::post('edits/{id}', 'CustomerController@update');
