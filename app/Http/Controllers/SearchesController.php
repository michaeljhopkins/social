<?php

namespace Social\Http\Controllers;

use Social\Search;
use Illuminate\Http\Request;
use function view;

class SearchesController extends Controller
{
    public function index()
    {
    	/** @var Search $searches */
    	$searches = Search::with('usernames')->first();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Search $search)
    {
        //
    }

    public function edit(Search $search)
    {
        //
    }

    public function update(Request $request, Search $search)
    {
        //
    }

    public function destroy(Search $search)
    {
        //
    }
}
