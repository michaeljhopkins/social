<?php

namespace Social\Http\Controllers;

use Social\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with(['network', 'username', 'contact'])->latest()->get();
        $view['posts'] = $posts;

        return view('posts.index', $view);
    }
}
