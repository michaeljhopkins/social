<?php

use Illuminate\Database\Seeder;

class NetworksTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('networks')->delete();

        \DB::table('networks')->insert([
            0 =>  [
                'name' => 'Facebook',
                'icon' => 'phpdebugbar-fa-facebook',
                'url' => 'https://www.facebook.com/',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ],
            1 =>  [
                'name' => 'Twitter',
                'icon' => 'phpdebugbar-fa-twitter',
                'url' => 'https://twitter.com/',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ],
            2 =>  [
                'name' => 'Instagram',
                'icon' => 'phpdebugbar-fa-instagram',
                'url' => 'https://www.instagram.com/',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ],
            3 =>  [
                'name' => 'Delicious',
                'icon' => 'phpdebugbar-fa-delicious',
                'url' => 'https://del.icio.us/',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ],
        ]);
    }
}
