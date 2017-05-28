<?php

namespace Social\Http\Controllers;

use Social\Search;
use Illuminate\Http\Request;
use function view;

class SearchesController extends Controller
{
    public function index()
    {
    	$view['searches'] = Search::get();
    	return view('searches.index',$view);
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
