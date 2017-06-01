<?php

namespace Social\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Social\Lineup;
use Social\Network;
use View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $lineups = Lineup::all();
        $networks = Network::all();
        View::composer('*', function (\Illuminate\View\View $view) use ($lineups, $networks) {
            /* @var \Illuminate\View\View|\Illuminate\Contracts\View\Factory $view */
            $view->with('lineups', $lineups);
            $view->with('networks', $networks);
        });
    }
}
