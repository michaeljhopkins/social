<?php

namespace Social\Providers;

use Illuminate\Support\ServiceProvider;
use Social\Lineup;
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
        View::composer('*', function ($view) {
            /* @var \Illuminate\View\View|\Illuminate\Contracts\View\Factory $view */
            $view->with('lineups', Lineup::all());
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
