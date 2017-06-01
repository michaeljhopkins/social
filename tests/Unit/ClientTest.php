<?php

namespace Tests\Unit;

use Social\Client;
use Social\Lineup;
use Social\User;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /** @test */
    function a_client_has_users()
    {
	    $client = create( Client::class);
	    $user = create( User::class,['client_id' => $client->id]);
	    $this->assertTrue( $client->users->contains($user));
    }

    /** @test */
    function a_client_belongs_to_many_lineups()
    {
	    $client = create( Client::class);
	    $lineup = create( Lineup::class);
	    $client->lineups()->attach($lineup);
	    $this->assertTrue( $client->lineups->contains($lineup));
    }

}
