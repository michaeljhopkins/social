<?php

use Illuminate\Database\Seeder;
use Social\Network;

class NetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    Network::create( [
		    'name' => 'Facebook',
		    'icon' => 'phpdebugbar-fa-facebook',
		    'url'  => 'https://www.facebook.com/'
	    ] );
	    Network::create( [ 'name' => 'Twitter', 'icon' => 'phpdebugbar-fa-twitter', 'url' => 'https://twitter.com/' ] );
	    Network::create( [
		    'name' => 'Instagram',
		    'icon' => 'phpdebugbar-fa-instagram',
		    'url'  => 'https://www.instagram.com/'
	    ] );
	    Network::create( [
		    'name' => 'Delicious',
		    'icon' => 'phpdebugbar-fa-delicious',
		    'url'  => 'https://del.icio.us/'
	    ] );
    }
}
