<?php

namespace Social\Providers;

use Illuminate\Support\ServiceProvider;
use Social\Lineup;
use View;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		View::composer( '*', function ( $view ) {
			$lineups = Lineup::all();
			$view->with( 'lineups', $lineups );
		} );
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
