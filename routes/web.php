<?php


Route::get('lineups/create','LineupsController@create');
Route::get('lineups/{lineup}','LineupsController@show');
Route::post('lineups','LineupsController@store');
Route::get( '/', 'HomeController@index' )->name( 'home' );
