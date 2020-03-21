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
    return view('index');
});

Route::get('/', 'CountdownController@index');


Route::get('epic/{epic}', 'CountdownController@show'); //show individual countdown

Route::get('new-epic', 'CountdownController@create')->name('create.countdown'); //show create page countdown
Route::post('store-epic', 'CountdownController@store')->name('store.countdown');
Route::get('epic/{epic}/edit', 'CountdownController@edit')->name('edit.countdown');
Route::post('epic/{epic}/update-epic', 'CountdownController@update')->name('update.countdown');
Route::get('epic/{epic}/delete', 'CountdownController@destroy')->name('delete.countdown');

Route::get('epic/{epic}/complete', 'CountdownController@complete')->name('complete.countdown');

Route::get('test', 'CountdownController@test');

Auth::routes();


Route::get('/dashboard', 'HomeController@index')->name('dashboard'); //eto yung homepage ng user palitan mo lagyan mo ng user controller

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
