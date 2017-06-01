<?php

namespace Social\Http\Controllers;

use Illuminate\Http\Request;
use Social\Filters\PostFilters;
use Social\Lineup;
use Social\Post;

class LineupsController extends Controller
{
    public function show($lineup, PostFilters $filter)
    {
        $requestedLineup = $this->getLineup($lineup);
        $postList = $this->getLineupsPosts($requestedLineup);

        return view('lineups.show', [
            'lineup'   => $requestedLineup,
            'posts'    => $this->getPosts($filter, $postList)->paginate(30),
            'contacts' => $requestedLineup->contacts->sortBy('last_name'),
        ]);
    }

    public function create()
    {
        return view('lineups.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:lineups,name',
        ]);
        $lineup = Lineup::create(['name' => request('name')]);
        $lineup->contacts()->attach(request('contacts'));

        return redirect('lineups/'.$lineup->name);
    }

    public function getPosts(PostFilters $filters, $builder = null)
    {
        return $builder->latest()->filter($filters);
    }

    private function getLineup(string $lineup)
    {
        return Lineup::with('contacts.usernames.network')->whereName($lineup)->first();
    }

    private function getLineupsPosts(Lineup $lineup)
    {
        return Post::with('username', 'contact', 'network')->whereIn('contact_id',
                $lineup->contacts->pluck('id')->toArray());
    }
}
