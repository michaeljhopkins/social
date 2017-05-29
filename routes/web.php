<?php

Route::resource( 'lineups', 'LineupsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
