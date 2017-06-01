<?php

namespace Tests\Feature;

use Social\Lineup;
use Tests\TestCase;

class CreateLineupsTest extends TestCase
{
	/** @test */
	function new_lineups_can_be_created()
	{
		$lineup = make(Lineup::class);
		$this->post('/lineups',$lineup->toArray())->assertRedirect('/lineups/'.$lineup->name);
	}

	/** @test */
	function create_page_for_lineups_contains_form()
	{
		$this->get('/lineups/create')
		     ->assertSee('name');
	}
}
