<?php

namespace Tests\Feature;

use function create;
use Social\Lineup;
use Tests\TestCase;

class ViewLineupTest extends TestCase
{
	/** @test */
	function specific_lineup_is_viewable()
	{
		$lineup = create( Lineup::class);
		$this->get('/lineups/'.$lineup->name)->assertStatus(200);
	}
}
