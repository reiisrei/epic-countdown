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
include_once('custom/user_routes.php');




Auth::routes();



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



// Route::get('epic/{epic}', 'CountdownController@show'); //show individual countdown

// Route::get('new-epic', 'PagesController@CreateCountdown')->name('create.countdown'); //show create page countdown
// Route::post('store-epic', 'CountdownController@store')->name('store.countdown');
// Route::get('epic/{epic}/edit', 'CountdownController@edit')->name('edit.countdown');
// Route::post('epic/{epic}/update-epic', 'CountdownController@update')->name('update.countdown');
// Route::get('epic/{epic}/delete', 'CountdownController@destroy')->name('delete.countdown');

// Route::get('epic/{epic}/complete', 'CountdownController@complete')->name('complete.countdown');
