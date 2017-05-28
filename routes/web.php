<?php

Route::get('/', 'LineupsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
