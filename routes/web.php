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
})->name('welcome');

Route::get('/create','ProductController@create')->name('create');
Route::post('/create','ProductController@store')->name('store');


Route::get('products', 'ProductController@index')->name('index');


Route::get('products/{id}','ProductController@show')->name('show');
Route::get('/{id}/edit','ProductController@edit')->name('edit');


Route::post('/{id}/edit','ProductController@update')->name('update');
Route::get('/{id}','ProductController@delete')->name('delete');



