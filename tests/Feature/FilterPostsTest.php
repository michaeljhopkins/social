<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Social\Post;
use Tests\TestCase;

class FilterPostsTest extends TestCase
{
	/** @test */
	function posts_can_be_filtered_by_network()
	{
		$postFromNetworkA = create(Post::class);
		$postFromNetworkB = create(Post::class);
		$this->get('/?network='.$postFromNetworkA->network->id)
			->assertSee($postFromNetworkA->content)
			->assertDontSee( $postFromNetworkB->content);
	}

	/** @test */
	function posts_can_be_filtered_by_date()
	{
		$newPost = create(Post::class);
		$newPost->update(['created_at' => Carbon::now()->subDay()]);
		$oldPost = create(Post::class);
		$oldPost->update(['created_at' => Carbon::now()->subWeek()]);
		$this->get(
			'/?from='.Carbon::now()->subDays(2)->format('Y-m-d').'&to='.Carbon::now()->format('Y-m-d')
		)->assertSee($newPost->content)
		 ->assertDontSee( $oldPost->content);
	}
}
