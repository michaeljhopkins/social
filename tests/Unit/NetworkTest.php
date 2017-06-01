<?php

namespace Tests\Unit;

use function create;
use Social\Network;
use Social\Post;
use Social\Username;
use Tests\TestCase;

class NetworkTest extends TestCase
{
    /** @test */
    function a_network_has_usernames()
    {
    	$network = create( Network::class);
    	$username = create( Username::class,['network_id' => $network->id]);
    	$this->assertTrue( $network->usernames->contains($username));
    }

    /** @test */
    function a_network_has_posts()
    {
	    $network = create( Network::class);
	    $post = create( Post::class,['network_id' => $network->id]);
	    $this->assertTrue( $network->posts->contains($post));
    }
}
