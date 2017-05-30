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
        $network->usernames->each(function ($user) use ($network, $f) {
            $this->createTweets($user, $network, $f);
            $this->createFacebooks($user, $network, $f);
            $this->createInstas($user, $network, $f);
        });
    }

    private function createTweets(Username $u, Network $network, $f)
    {
        $u->posts()->create([
            'content'    => $f->words(10, true),
            'network_id' => 2,
            'contact_id' => $u->contact_id,
            'permalink'  => 'https://twitter.com/laracasts/status/823929504536084480',
        ], [
            'content'    => $f->words(10, true),
            'network_id' => 2,
            'contact_id' => $u->contact_id,
            'permalink'  => 'https://twitter.com/laracasts/status/823929504536084480',
        ], [
                'content'    => $f->words(10, true),
                'network_id' => 2,
                'contact_id' => $u->contact_id,
                'permalink'  => 'https://twitter.com/laracasts/status/823929504536084480',
            ]
        );
    }

    private function createFacebooks(Username $u, Network $network, $f)
    {
        $u->posts()->create([
            'content'    => $f->paragraph,
            'network_id' => 1,
            'contact_id' => $u->contact_id,
            'permalink'  => 'https://www.facebook.com/CarHopperApp/photos/a.1026080190741744.1073741828.992721110744319/1709178322431924/?type=3',
        ], [
                'content'    => $f->paragraph,
                'network_id' => 1,
                'contact_id' => $u->contact_id,
                'permalink'  => 'https://www.facebook.com/CarHopperApp/photos/a.1026080190741744.1073741828.992721110744319/1709178322431924/?type=3',
            ]
        );
    }

    private function createInstas(Username $u, Network $network, $f)
    {
        $u->posts()->create([
            'content'    => $f->imageUrl(150, 100),
            'network_id' => 3,
            'contact_id' => $u->contact_id,
            'permalink'  => 'https://www.instagram.com/p/-x98zmDS5l/',
        ]);
    }
}
