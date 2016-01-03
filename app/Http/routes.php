<?php

Route::group(['middleware' => ['web']], function () {

    // Authentication routes...
    Route::get('login', 'Auth\AuthController@getLogin')->name('login');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout')->name('logout');

    // Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister')->name('register');
    Route::post('register', 'Auth\AuthController@postRegister');

    // Admin routes...
    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

        Route::get('/', 'DashbordController@index')->name('admin.dashbord');
        Route::resource('category','CategoriesController');

    });

    // Guest routes...
    Route::get('/', function(){
        Auth::logout();
        return 'Hello world! <a href='. route('login') .'>Login</a>';
    });
});
