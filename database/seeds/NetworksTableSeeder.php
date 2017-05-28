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
        Network::create(['name' => 'Facebook']);
        Network::create(['name' => 'Twitter']);
        Network::create(['name' => 'Instagram']);
        Network::create(['name' => 'Friendster']);
    }
}
