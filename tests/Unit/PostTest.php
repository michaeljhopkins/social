<?php

namespace Tests\Unit;

use Social\Contact;
use Social\Network;
use Social\Post;
use Social\Username;
use Tests\TestCase;

class PostTest extends TestCase
{
	/** @test */
	function posts_belong_to_a_network()
	{
		$post = create(Post::class);
		$this->assertInstanceOf( Network::class, $post->network);
	}

	/** @test */
	function posts_belong_to_a_username()
	{
		$post = create(Post::class);
		$this->assertInstanceOf( Username::class, $post->username);
	}

	/** @test */
	function posts_belong_to_a_contact()
	{
		$post = create(Post::class);
		$this->assertInstanceOf( Contact::class, $post->contact);
	}
}
