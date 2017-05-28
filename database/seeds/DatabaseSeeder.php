<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call( ClientsTableSeeder::class);
	    $this->call( UsersTableSeeder::class);
	    $this->call( NetworksTableSeeder::class);
	    $this->call( ContactsAndUsernamesTableSeeder::class);
	    $this->call( LineupsTableSeeder::class);
	    $this->call( UsernamesTableSeeder::class);
	    $this->call( PostsTableSeeder::class);
    }
}
