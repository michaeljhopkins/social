<?php

use Illuminate\Database\Seeder;

class LineupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lineups')->delete();
        
        \DB::table('lineups')->insert(array (
            0 => 
            array (
                'name' => 'first list',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            1 => 
            array (
                'name' => 'second list',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
            2 => 
            array (
                'name' => 'third list',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:30',
                'updated_at' => '2017-05-30 18:40:30',
            ),
        ));
        
        
    }
}