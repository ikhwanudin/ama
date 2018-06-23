<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index');
Route::post('/dashboard/new', 'DashboardController@store')->name('ask-store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
