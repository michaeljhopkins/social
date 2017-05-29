<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Social\Network;
use Social\Username;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$f = Factory::create();
	    $network = Network::find(2);
	    $users = $network->usernames;

	    foreach($users as $user) {
		    /** @var Username $u */
		    $u = $user;
		    foreach ( range( 1, 5 ) as $index ) {
			    $this->createTweets( $u, $network,$f );
			    $this->createFacebooks( $u, $network,$f );
			    $this->createInstas( $u, $network,$f );
		    }
	    }
    }

	private function createTweets(Username $u,Network $network, $f) {
    	$u->posts()->create( ['content' => $f->words(10,true),'network_id' => 2,'contact_id' => $u->contact_id]);
	}

	private function createFacebooks(Username $u,Network $network, $f) {
    	$u->posts()->create( ['content' => $f->paragraph,'network_id' => 1,'contact_id' => $u->contact_id]);
	}

	private function createInstas(Username $u,Network $network, $f) {
    	$u->posts()->create( ['content' => $f->imageUrl(150,100),'network_id' => 3,'contact_id' => $u->contact_id]);
    }
}
