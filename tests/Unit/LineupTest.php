<?php

namespace Tests\Unit;

use Social\Client;
use Social\Contact;
use Social\Lineup;
use Tests\TestCase;

class LineupTest extends TestCase
{
    /** @test */
    function lineups_belongs_to_many_contacts()
    {
	    $lineup = create( Lineup::class);
	    $contact = create( Contact::class);
	    $lineup->contacts()->attach($contact);
	    $this->assertTrue( $lineup->contacts->contains($contact));
    }

    /** @test */
    function lineups_belong_to_many_clients()
    {
    	$lineup = create(Lineup::class);
    	$client = create(Client::class);
    	$lineup->clients()->attach($client);
    	$this->assertTrue($lineup->clients->contains($client));
    }

    /** @test */
    function route_key_name()
    {
    	$lineup = create(Lineup::class);
    	$this->assertEquals('name', $lineup->getRouteKeyName());
    	$keyname =$lineup->getRouteKeyName();
    	$this->assertEquals($lineup->name, $lineup->$keyname);
    }
}
