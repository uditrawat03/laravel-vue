<?php

Auth::routes();
Route::prefix('company')->group(function(){
    Route::get('/', 'CompanyController@index')->name('company.index');
    Route::get('/add', 'CompanyController@add')->name('company.create');
    Route::get('/edit', 'CompanyController@edit')->name('company.create');
    Route::post('/create', 'CompanyController@create')->name('company.create');
    Route::post('/update', 'CompanyController@update')->name('company.update');
    Route::get('/show', 'CompanyController@show')->name('company.show');
});
