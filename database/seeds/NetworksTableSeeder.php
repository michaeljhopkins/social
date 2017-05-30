<?php

use Illuminate\Database\Seeder;

class NetworksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('networks')->delete();
        
        \DB::table('networks')->insert(array (
            0 => 
            array (
                'name' => 'Facebook',
                'icon' => 'phpdebugbar-fa-facebook',
                'url' => 'https://www.facebook.com/',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            1 => 
            array (
                'name' => 'Twitter',
                'icon' => 'phpdebugbar-fa-twitter',
                'url' => 'https://twitter.com/',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            2 => 
            array (
                'name' => 'Instagram',
                'icon' => 'phpdebugbar-fa-instagram',
                'url' => 'https://www.instagram.com/',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            3 => 
            array (
                'name' => 'Delicious',
                'icon' => 'phpdebugbar-fa-delicious',
                'url' => 'https://del.icio.us/',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
        ));
        
        
    }
}