<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'first_name' => 'Sherrod',
                'last_name' => 'Brown',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            1 => 
            array (
                'first_name' => 'Maria',
                'last_name' => 'Cantwell',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            2 => 
            array (
                'first_name' => 'Benjamin',
                'last_name' => 'Cardin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            3 => 
            array (
                'first_name' => 'Thomas',
                'last_name' => 'Carper',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            4 => 
            array (
                'first_name' => 'Robert',
                'last_name' => 'Casey',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            5 => 
            array (
                'first_name' => 'Bob',
                'last_name' => 'Corker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            6 => 
            array (
                'first_name' => 'Dianne',
                'last_name' => 'Feinstein',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            7 => 
            array (
                'first_name' => 'Orrin',
                'last_name' => 'Hatch',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            8 => 
            array (
                'first_name' => 'Amy',
                'last_name' => 'Klobuchar',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            9 => 
            array (
                'first_name' => 'Claire',
                'last_name' => 'McCaskill',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            10 => 
            array (
                'first_name' => 'Robert',
                'last_name' => 'Menéndez',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            11 => 
            array (
                'first_name' => 'Bill',
                'last_name' => 'Nelson',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            12 => 
            array (
                'first_name' => 'Bernard',
                'last_name' => 'Sanders',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            13 => 
            array (
                'first_name' => 'Debbie',
                'last_name' => 'Stabenow',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            14 => 
            array (
                'first_name' => 'Jon',
                'last_name' => 'Tester',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            15 => 
            array (
                'first_name' => 'Sheldon',
                'last_name' => 'Whitehouse',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            16 => 
            array (
                'first_name' => 'John',
                'last_name' => 'Barrasso',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            17 => 
            array (
                'first_name' => 'Roger',
                'last_name' => 'Wicker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            18 => 
            array (
                'first_name' => 'Lamar',
                'last_name' => 'Alexander',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            19 => 
            array (
                'first_name' => 'Thad',
                'last_name' => 'Cochran',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            20 => 
            array (
                'first_name' => 'Susan',
                'last_name' => 'Collins',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            21 => 
            array (
                'first_name' => 'John',
                'last_name' => 'Cornyn',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            22 => 
            array (
                'first_name' => 'Richard',
                'last_name' => 'Durbin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            23 => 
            array (
                'first_name' => 'Michael',
                'last_name' => 'Enzi',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            24 => 
            array (
                'first_name' => 'Lindsey',
                'last_name' => 'Graham',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            25 => 
            array (
                'first_name' => 'James',
                'last_name' => 'Inhofe',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            26 => 
            array (
                'first_name' => 'Mitch',
                'last_name' => 'McConnell',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            27 => 
            array (
                'first_name' => 'Jeff',
                'last_name' => 'Merkley',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            28 => 
            array (
                'first_name' => 'John',
                'last_name' => 'Reed',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            29 => 
            array (
                'first_name' => 'James',
                'last_name' => 'Risch',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            )
        ));
        
        
    }
}