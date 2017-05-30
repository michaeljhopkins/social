<?php

namespace Social\Http\Controllers;

use Social\Lineup;
use Social\Network;
use Social\Post;

class LineupsController extends Controller
{
    public function index()
    {
        $view['lineup'] = Network::with('usernames.contact')->get()->toJson();

        return view('searches.index', $view);
    }

    public function show(Lineup $lineup)
    {
        /** @var Lineup $results */
        $results = $lineup->load('contacts', 'contacts.usernames.network');
        $contactIds = $results->contacts->pluck('id')->toArray();
        $postList = Post::with('username', 'contact', 'network')->whereIn('contact_id', $contactIds)->get();
        $view = ['lineup'   => $results,
                        'posts'    => $postList,
                        'contacts' => $lineup->contacts->sortBy('last_name'),
        ];

        return view('lineups.show', $view);
    }
}
