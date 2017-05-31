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
        /*
         * Eloquent seeder for Contacts and usernames
         */

        //$this->call(EloquentClientsTableSeeder::class);
        //$this->call(EloquentUsersTableSeeder::class);
        //$this->call(EloquentNetworksTableSeeder::class);
        //$this->call(EloquentContactsAndUsernamesTableSeeder::class);
        //$this->call(EloquentPostsTableSeeder::class);
        //$this->call( EloquentLineupsTableSeeder::class);

        /*
         * Faster array based seeders for contacts and usernames
         //*/

	    $this->call(NetworksTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(UsernamesTableSeeder::class);
        $this->call(FederalLegislatorsTableSeeder::class);
        $this->call(ClientLineupTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        //$this->call(LineupsTableSeeder::class);
        $this->call(EloquentLineupsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TempFedsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
