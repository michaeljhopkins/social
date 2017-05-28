<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Social\Client;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::all();
        $f = Factory::create();
        foreach ($clients as $c){
        	foreach(range(1,10) as $index){
        		$c->users()->create([
        			'name' => $f->name,
			        'email' => $f->email,
			        'password' => Hash::make( 'password')
		        ]);
	        }
        }
    }
}
