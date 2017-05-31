<?php

namespace Social\Providers;

use Illuminate\Support\ServiceProvider;
use Social\Lineup;
use Social\Network;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lineups = Lineup::all();
        $networks = Network::all();
        View::composer('*', function (\Illuminate\View\View $view) use ($lineups,$networks) {
            /* @var \Illuminate\View\View|\Illuminate\Contracts\View\Factory $view */
            $view->with('lineups', $lineups);
            $view->with('networks', $networks);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
