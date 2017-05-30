<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Social\Client;

class EloquentClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = Faker::create();
        foreach (range(1, 5) as $index) {
            Client::create(['name' => $f->company]);
        }
    }
}
