<?php

namespace Tests\Unit;

use Social\Contact;
use Social\Lineup;
use Social\Post;
use Social\Username;
use Tests\TestCase;

class ContactTest extends TestCase
{
	/** @test */
	function contacts_have_usernames()
	{
		$contact = create( Contact::class);
		$username = create( Username::class,['contact_id' => $contact->id]);
		$this->assertTrue( $contact->usernames->contains($username));
	}

	/** @test */
	function contacts_have_posts()
	{
		$contact = create( Contact::class);
		$post = create( Post::class,['contact_id' => $contact->id]);
		$this->assertTrue( $contact->posts->contains($post));
	}

	/** @test */
	function contacts_belong_to_many_lineups()
	{
		$contact = create( Contact::class);
		$lineup = create( Lineup::class);
		$contact->lineups()->attach($lineup);
		$this->assertTrue( $contact->lineups->contains($lineup));
	}
}
