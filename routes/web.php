<?php

Route::get('/', 'SearchesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
