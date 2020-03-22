<?php
/* Custom Ageing Routes */


Route::group(['prefix' => 'user'], function () {
    // Route::get('/dashboard', 'PagesController@Userdashboard')->name('user.dashboard');
    Route::get('/my-account', 'PagesController@MyAccount')->name('user.account');
    Route::get('/my-wall', 'PagesController@MyWall')->name('user.wall');
    Route::get('/my-countdown', 'PagesController@MyCountdown')->name('user.countdown');
    Route::get('/create-countdown', 'PagesController@CreateCountdown')->name('create.countdown');
});
Route::get('/', 'CountdownController@index');
?>

