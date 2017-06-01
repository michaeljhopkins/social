<?php

namespace Tests\Feature;

use Artisan;
use Social\Contact;
use Social\FederalLegislator;
use Social\Lineup;
use Social\TempFed;
use Tests\TestCase;

class DbSyncCommandTest extends TestCase
{
	/** @test */
	function db_sync_test()
	{
		$fed = create(FederalLegislator::class);
		$this->assertEmpty(Contact::get());
		$this->assertEmpty(TempFed::get());
		Artisan::call('db:sync');
		$this->assertCount(1, Contact::get());
		$this->assertCount(1, TempFed::get());
	}

	/** @test */
	function lineup_is_destroyed_and_recreated()
	{
		$oldLineup = create(Lineup::class,['name' => 'Legislators']);
		$oldLineupId = $oldLineup->id;
		$fed = create(FederalLegislator::class);
		Artisan::call('db:sync');
		$newLineup = Lineup::orderBy('id','desc')->first();
		$this->assertNotEquals( $oldLineupId, $newLineup->id);
	}
}
