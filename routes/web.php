<?php

Route::resource( 'lineups', 'LineupsController');

Auth::routes();

Route::get( '/', 'HomeController@index' )->name( 'home' );
