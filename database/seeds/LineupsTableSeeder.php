<?php

use Illuminate\Database\Seeder;
use Social\Contact;
use Social\Lineup;

class LineupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/** @var Lineup $l */
        $l = Lineup::create(['name' => 'first list']);
        $contacts = Contact::inRandomOrder()->limit(10)->get();
        $l->contacts()->attach( $contacts);


	    /** @var Lineup $l */
	    $l = Lineup::create(['name' => 'second list']);
	    $contacts = Contact::inRandomOrder()->limit(3)->get();
	    $l->contacts()->attach( $contacts);

	    /** @var Lineup $l */
	    $l = Lineup::create(['name' => 'third list']);
	    $contacts = Contact::inRandomOrder()->limit(20)->get();
	    $l->contacts()->attach( $contacts);
    }
}
