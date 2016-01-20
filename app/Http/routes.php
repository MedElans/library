<?php

Route::group(['middleware' => ['web']], function () {

    // Auth routes
    Route::auth();

    // Admin routes...
    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

        Route::get('/', 'DashbordController@index')->name('admin.dashbord');
        Route::resource('category','CategoriesController');
        Route::resource('unit','UnitsController');
        Route::resource('source','SourcesController');

    });

    // Guest routes...
    Route::get('/', function(){
        return view('guest.presentation');
    });
});