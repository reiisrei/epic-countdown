<?php
/* Custom Ageing Routes */


Route::group(['prefix' => 'user'], function () {
    // Route::get('/dashboard', 'PagesController@Userdashboard')->name('user.dashboard');
    Route::get('/my-account/{id}', 'PagesController@MyAccount')->name('user.account');
    Route::post('/my-account/update/{id}', 'PagesController@update')->name('user.update');
    Route::delete('/my-account/delete/{id}', 'PagesController@delete')->name('user.delete');

    Route::get('/my-wall/{id}', 'PagesController@MyWall')->name('user.wall');
    Route::get('/my-countdown/{id}', 'PagesController@MyCountdown')->name('user.countdown');
    Route::get('/create-countdown/{id}', 'PagesController@CreateCountdown')->name('create.countdown');
});
Route::get('/', 'CountdownController@index')->name('index');
?>

