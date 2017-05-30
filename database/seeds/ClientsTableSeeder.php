<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clients')->delete();
        
        \DB::table('clients')->insert(array (
            0 => 
            array (
                'name' => 'Fadel and Sons',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            1 => 
            array (
                'name' => 'Hilll Group',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            2 => 
            array (
                'name' => 'Waters-Roob',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            3 => 
            array (
                'name' => 'Romaguera-Rolfson',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
            4 => 
            array (
                'name' => 'Mueller-Reichel',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ),
        ));
        
        
    }
}