<?php

namespace Tests\Feature;

use Social\Post;
use Tests\TestCase;

class SiteRootTest extends TestCase
{
	/** @test */
	function site_root_contains_all_posts()
	{
		$firstPost = create(Post::class);
		$secondPost = create(Post::class);
		$this->get('/')
		     ->assertSee($firstPost->content)
		     ->assertSee($secondPost->content);
	}
}
