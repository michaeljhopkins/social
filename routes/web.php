<?php

Route::resource( 'lineups', 'LineupsController');
Route::get( '/', 'HomeController@index' )->name( 'home' );
