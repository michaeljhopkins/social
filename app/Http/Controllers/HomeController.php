<?php

namespace Social\Http\Controllers;

use Social\Filters\PostFilters;
use Social\Post;

class HomeController extends Controller
{
    public function index(PostFilters $filter)
    {
    	$view['posts'] = $this->getPosts($filter)->paginate(30);
        return view('posts.index', $view);
    }

	public function getPosts(PostFilters $filters)
	{
		return Post::with(['network','username','contact'])->latest()->filter($filters);
	}
}
