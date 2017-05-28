<?php

namespace Social\Http\Controllers;

use Illuminate\Http\Request;
use Social\Lineup;
use Social\Network;

class LineupsController extends Controller {

	public function index() {
		/** @var Network $network */
		$network = Network::with( 'usernames.contact' )->first();
		dd( $network->toArray() );
	}

	public function create() {
		//
	}

	public function store( Request $request ) {
		//
	}

	public function show( Lineup $lineup ) {
		//
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
