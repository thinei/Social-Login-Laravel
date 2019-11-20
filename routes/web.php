<?php

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('login/callback/{provider}', 'Auth\LoginController@handleProviderCallback');
