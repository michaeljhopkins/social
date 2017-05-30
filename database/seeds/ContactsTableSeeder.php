<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->delete();

        \DB::table('contacts')->insert([
            0 =>  [
                'first_name' => 'Sherrod',
                'last_name' => 'Brown',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            1 =>  [
                'first_name' => 'Maria',
                'last_name' => 'Cantwell',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            2 =>  [
                'first_name' => 'Benjamin',
                'last_name' => 'Cardin',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            3 =>  [
                'first_name' => 'Thomas',
                'last_name' => 'Carper',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            4 =>  [
                'first_name' => 'Robert',
                'last_name' => 'Casey',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            5 =>  [
                'first_name' => 'Bob',
                'last_name' => 'Corker',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            6 =>  [
                'first_name' => 'Dianne',
                'last_name' => 'Feinstein',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            7 =>  [
                'first_name' => 'Orrin',
                'last_name' => 'Hatch',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            8 =>  [
                'first_name' => 'Amy',
                'last_name' => 'Klobuchar',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            9 =>  [
                'first_name' => 'Claire',
                'last_name' => 'McCaskill',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            10 =>  [
                'first_name' => 'Robert',
                'last_name' => 'Menéndez',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            11 =>  [
                'first_name' => 'Bill',
                'last_name' => 'Nelson',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            12 =>  [
                'first_name' => 'Bernard',
                'last_name' => 'Sanders',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            13 =>  [
                'first_name' => 'Debbie',
                'last_name' => 'Stabenow',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            14 =>  [
                'first_name' => 'Jon',
                'last_name' => 'Tester',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            15 =>  [
                'first_name' => 'Sheldon',
                'last_name' => 'Whitehouse',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            16 =>  [
                'first_name' => 'John',
                'last_name' => 'Barrasso',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            17 =>  [
                'first_name' => 'Roger',
                'last_name' => 'Wicker',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            18 =>  [
                'first_name' => 'Lamar',
                'last_name' => 'Alexander',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            19 =>  [
                'first_name' => 'Thad',
                'last_name' => 'Cochran',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            20 =>  [
                'first_name' => 'Susan',
                'last_name' => 'Collins',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            21 =>  [
                'first_name' => 'John',
                'last_name' => 'Cornyn',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            22 =>  [
                'first_name' => 'Richard',
                'last_name' => 'Durbin',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            23 =>  [
                'first_name' => 'Michael',
                'last_name' => 'Enzi',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            24 =>  [
                'first_name' => 'Lindsey',
                'last_name' => 'Graham',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            25 =>  [
                'first_name' => 'James',
                'last_name' => 'Inhofe',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            26 =>  [
                'first_name' => 'Mitch',
                'last_name' => 'McConnell',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            27 =>  [
                'first_name' => 'Jeff',
                'last_name' => 'Merkley',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            28 =>  [
                'first_name' => 'John',
                'last_name' => 'Reed',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
            29 =>  [
                'first_name' => 'James',
                'last_name' => 'Risch',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ],
        ]);
    }
}
