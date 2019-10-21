<?php

Auth::routes();
Route::prefix('user')->group(function(){
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/show', 'UserController@show')->name('users.show');
});
