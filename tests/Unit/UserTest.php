<?php

namespace Tests\Unit;

use Social\Client;
use Social\User;
use Tests\TestCase;

class UserTest extends TestCase
{
	/** @test */
	function a_user_belongs_to_a_client()
	{
		$user = create(User::class);
		$this->assertInstanceOf( Client::class, $user->client);
	}
}
