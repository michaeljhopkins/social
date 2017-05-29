<?php

namespace Social\Http\Controllers;

use Illuminate\Http\Request;
use function json;
use Social\Lineup;
use Social\Network;
use Social\Post;

class LineupsController extends Controller {

	public function index() {
		$view['lineup'] = Network::with( 'usernames.contact')->get()->toJson();
		return view('searches.index',$view);
	}

	public function create() {
		//
	}

	public function store( Request $request ) {
		//
	}

	public function show( Lineup $lineup ) {
		$contactIds = $lineup->contacts->pluck( 'id')->toArray();
		$return = Post::with('username','contact','network')->whereIn( 'contact_id', $contactIds)->get();
		return $return->toJson();
	}

	public function edit( Lineup $lineup ) {
		//
	}

	public function update( Request $request, Lineup $lineup ) {
		//
	}

	public function destroy( Lineup $lineup ) {
		//
	}
}
