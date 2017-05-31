<?php

namespace Social\Http\Controllers;

use Illuminate\Http\Request;
use function redirect;
use Social\Filters\PostFilters;
use Social\Lineup;
use Social\Network;
use Social\Post;

class LineupsController extends Controller
{
    public function show($lineup,PostFilters $filter)
    {
        $results = Lineup::with('contacts.usernames.network')
                         ->whereName($lineup)
                         ->first();
        $postList = Post::with('username', 'contact', 'network')
                        ->whereIn('contact_id', $results->contacts->pluck('id')->toArray());
	    $view = [
	    	'lineup'   => $results,
		    'posts'    => $this->getPosts($filter,$postList)->paginate(30),
		    'contacts' => $results->contacts->sortBy('last_name'),
        ];
        return view('lineups.show', $view);
    }

    public function create()
    {
    	return view('lineups.create');
    }

    public function store(Request $request)
    {
    	$this->validate( $request, [
    		'name' => 'required|unique:lineups,name'
	    ]);
    	$lineup = Lineup::create(['name' => request('name')]);
    	$lineup->contacts()
	     ->attach(request('contacts'));
    	return redirect('lineups/'.$lineup->name);
    }
	public function getPosts(PostFilters $filters,$builder = null)
	{
		if($builder){
			return $builder->latest()->filter($filters);
		}
		else{
			return Post::with(['network','username','contact'])->latest()->filter($filters);
		}
	}
}
