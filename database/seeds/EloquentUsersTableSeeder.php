<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Social\Client;

class EloquentUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = Factory::create();
        Client::all()->each(function ($c) use ($f) {
            foreach (range(1, 10) as $index) {
                $c->users()->create([
                    'name' => $f->name,
                    'email' => $f->email,
                    'password' => Hash::make('password'),
                ]);
            }
        });
    }
}
