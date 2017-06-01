<?php

namespace Tests\Unit;

use Social\Contact;
use Social\Network;
use Social\Post;
use Social\Username;
use Tests\TestCase;

class UsernameTest extends TestCase
{
	/** @test */
	function username_belongs_to_a_network()
	{
		$username = create(Username::class);
		$this->assertInstanceOf( Network::class, $username->network);
	}

	/** @test */
	function username_belongs_to_a_contact()
	{
		$username = create(Username::class);
		$this->assertInstanceOf( Contact::class, $username->contact);
	}

	/** @test */
	function username_has_many_posts()
	{
		$username = create( Username::class);
		$post = create( Post::class,['username_id' => $username->id]);
		$this->assertTrue( $username->posts->contains($post));
	}
}
