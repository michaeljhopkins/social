<?php

use Illuminate\Database\Seeder;

class UsernamesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usernames')->delete();
        
        \DB::table('usernames')->insert(array (
            0 => 
            array (
                'contact_id' => 1,
                'network_id' => 1,
                'identifyer' => 'SenSherrodBrown',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            1 => 
            array (
                'contact_id' => 2,
                'network_id' => 2,
                'identifyer' => 'senatorcantwell',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            2 => 
            array (
                'contact_id' => 2,
                'network_id' => 1,
                'identifyer' => 'SenatorCantwell',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            3 => 
            array (
                'contact_id' => 3,
                'network_id' => 2,
                'identifyer' => 'senatorbencardin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            4 => 
            array (
                'contact_id' => 3,
                'network_id' => 1,
                'identifyer' => 'SenatorCardin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            5 => 
            array (
                'contact_id' => 4,
                'network_id' => 2,
                'identifyer' => 'tomcarper',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            6 => 
            array (
                'contact_id' => 4,
                'network_id' => 1,
                'identifyer' => 'SenatorCarper',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            7 => 
            array (
                'contact_id' => 5,
                'network_id' => 2,
                'identifyer' => 'SenatorBobCasey',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            8 => 
            array (
                'contact_id' => 5,
                'network_id' => 1,
                'identifyer' => 'SenBobCasey',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            9 => 
            array (
                'contact_id' => 6,
                'network_id' => 2,
                'identifyer' => 'bobcorker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            10 => 
            array (
                'contact_id' => 6,
                'network_id' => 1,
                'identifyer' => 'SenBobCorker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            11 => 
            array (
                'contact_id' => 7,
                'network_id' => 2,
                'identifyer' => 'senatorfeinstein',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            12 => 
            array (
                'contact_id' => 7,
                'network_id' => 1,
                'identifyer' => 'SenFeinstein',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            13 => 
            array (
                'contact_id' => 8,
                'network_id' => 2,
                'identifyer' => 'senatororrinhatch',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            14 => 
            array (
                'contact_id' => 8,
                'network_id' => 1,
                'identifyer' => 'SenOrrinHatch',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            15 => 
            array (
                'contact_id' => 10,
                'network_id' => 2,
                'identifyer' => 'senatormccaskill',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            16 => 
            array (
                'contact_id' => 10,
                'network_id' => 1,
                'identifyer' => 'McCaskillOffice',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            17 => 
            array (
                'contact_id' => 11,
                'network_id' => 2,
                'identifyer' => 'senatormenendez',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            18 => 
            array (
                'contact_id' => 11,
                'network_id' => 1,
                'identifyer' => 'SenatorMenendez',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            19 => 
            array (
                'contact_id' => 12,
                'network_id' => 1,
                'identifyer' => 'SenBillNelson',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            20 => 
            array (
                'contact_id' => 13,
                'network_id' => 2,
                'identifyer' => 'senatorsanders',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            21 => 
            array (
                'contact_id' => 13,
                'network_id' => 1,
                'identifyer' => 'SenSanders',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            22 => 
            array (
                'contact_id' => 14,
                'network_id' => 1,
                'identifyer' => 'SenStabenow',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            23 => 
            array (
                'contact_id' => 15,
                'network_id' => 2,
                'identifyer' => 'senatortester',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            24 => 
            array (
                'contact_id' => 15,
                'network_id' => 1,
                'identifyer' => 'SenatorTester',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            25 => 
            array (
                'contact_id' => 16,
                'network_id' => 2,
                'identifyer' => 'SenatorWhitehouse',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            26 => 
            array (
                'contact_id' => 16,
                'network_id' => 1,
                'identifyer' => 'SenWhitehouse',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            27 => 
            array (
                'contact_id' => 17,
                'network_id' => 2,
                'identifyer' => 'johnbarrasso',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            28 => 
            array (
                'contact_id' => 17,
                'network_id' => 1,
                'identifyer' => 'SenJohnBarrasso',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            29 => 
            array (
                'contact_id' => 18,
                'network_id' => 2,
                'identifyer' => 'SenatorWicker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            30 => 
            array (
                'contact_id' => 18,
                'network_id' => 1,
                'identifyer' => 'SenatorWicker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            31 => 
            array (
                'contact_id' => 19,
                'network_id' => 2,
                'identifyer' => 'senatorlamaralexander',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            32 => 
            array (
                'contact_id' => 19,
                'network_id' => 1,
                'identifyer' => 'SenAlexander',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            33 => 
            array (
                'contact_id' => 20,
                'network_id' => 1,
                'identifyer' => 'SenThadCochran',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            34 => 
            array (
                'contact_id' => 21,
                'network_id' => 2,
                'identifyer' => 'susancollins',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            35 => 
            array (
                'contact_id' => 21,
                'network_id' => 1,
                'identifyer' => 'SenatorCollins',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            36 => 
            array (
                'contact_id' => 22,
                'network_id' => 2,
                'identifyer' => 'sen.johncornyn',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            37 => 
            array (
                'contact_id' => 22,
                'network_id' => 1,
                'identifyer' => 'JohnCornyn',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            38 => 
            array (
                'contact_id' => 23,
                'network_id' => 2,
                'identifyer' => 'SenatorDurbin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            39 => 
            array (
                'contact_id' => 23,
                'network_id' => 1,
                'identifyer' => 'SenatorDurbin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            40 => 
            array (
                'contact_id' => 24,
                'network_id' => 2,
                'identifyer' => 'mikeenzi',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            41 => 
            array (
                'contact_id' => 24,
                'network_id' => 1,
                'identifyer' => 'SenatorEnzi',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            42 => 
            array (
                'contact_id' => 25,
                'network_id' => 2,
                'identifyer' => 'USSenatorLindseyGraham',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            43 => 
            array (
                'contact_id' => 25,
                'network_id' => 1,
                'identifyer' => 'GrahamBlog',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            44 => 
            array (
                'contact_id' => 26,
                'network_id' => 2,
                'identifyer' => 'jiminhofe',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            45 => 
            array (
                'contact_id' => 26,
                'network_id' => 1,
                'identifyer' => 'InhofePress',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            46 => 
            array (
                'contact_id' => 27,
                'network_id' => 2,
                'identifyer' => 'mitchmcconnell',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            47 => 
            array (
                'contact_id' => 27,
                'network_id' => 1,
                'identifyer' => 'McConnellPress',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            48 => 
            array (
                'contact_id' => 28,
                'network_id' => 2,
                'identifyer' => 'jeffmerkley',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            49 => 
            array (
                'contact_id' => 28,
                'network_id' => 1,
                'identifyer' => 'SenJeffMerkley',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            50 => 
            array (
                'contact_id' => 29,
                'network_id' => 2,
                'identifyer' => 'SenJackReed',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            51 => 
            array (
                'contact_id' => 29,
                'network_id' => 1,
                'identifyer' => 'SenJackReed',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            52 => 
            array (
                'contact_id' => 30,
                'network_id' => 1,
                'identifyer' => 'SenatorRisch',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            53 => 
            array (
                'contact_id' => 1,
                'network_id' => 3,
                'identifyer' => 'insta-Sherrod-Brown',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            54 => 
            array (
                'contact_id' => 2,
                'network_id' => 3,
                'identifyer' => 'insta-Maria-Cantwell',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            55 => 
            array (
                'contact_id' => 3,
                'network_id' => 3,
                'identifyer' => 'insta-Benjamin-Cardin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            56 => 
            array (
                'contact_id' => 4,
                'network_id' => 3,
                'identifyer' => 'insta-Thomas-Carper',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            57 => 
            array (
                'contact_id' => 5,
                'network_id' => 3,
                'identifyer' => 'insta-Robert-Casey',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            58 => 
            array (
                'contact_id' => 6,
                'network_id' => 3,
                'identifyer' => 'insta-Bob-Corker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            59 => 
            array (
                'contact_id' => 7,
                'network_id' => 3,
                'identifyer' => 'insta-Dianne-Feinstein',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            60 => 
            array (
                'contact_id' => 8,
                'network_id' => 3,
                'identifyer' => 'insta-Orrin-Hatch',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            61 => 
            array (
                'contact_id' => 9,
                'network_id' => 3,
                'identifyer' => 'insta-Amy-Klobuchar',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            62 => 
            array (
                'contact_id' => 10,
                'network_id' => 3,
                'identifyer' => 'insta-Claire-McCaskill',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            63 => 
            array (
                'contact_id' => 11,
                'network_id' => 3,
                'identifyer' => 'insta-Robert-Menéndez',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            64 => 
            array (
                'contact_id' => 12,
                'network_id' => 3,
                'identifyer' => 'insta-Bill-Nelson',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            65 => 
            array (
                'contact_id' => 13,
                'network_id' => 3,
                'identifyer' => 'insta-Bernard-Sanders',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            66 => 
            array (
                'contact_id' => 14,
                'network_id' => 3,
                'identifyer' => 'insta-Debbie-Stabenow',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            67 => 
            array (
                'contact_id' => 15,
                'network_id' => 3,
                'identifyer' => 'insta-Jon-Tester',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            68 => 
            array (
                'contact_id' => 16,
                'network_id' => 3,
                'identifyer' => 'insta-Sheldon-Whitehouse',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            69 => 
            array (
                'contact_id' => 17,
                'network_id' => 3,
                'identifyer' => 'insta-John-Barrasso',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            70 => 
            array (
                'contact_id' => 18,
                'network_id' => 3,
                'identifyer' => 'insta-Roger-Wicker',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            101 => 
            array (
                'contact_id' => 19,
                'network_id' => 3,
                'identifyer' => 'insta-Lamar-Alexander',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            102 => 
            array (
                'contact_id' => 20,
                'network_id' => 3,
                'identifyer' => 'insta-Thad-Cochran',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            103 => 
            array (
                'contact_id' => 21,
                'network_id' => 3,
                'identifyer' => 'insta-Susan-Collins',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            104 => 
            array (
                'contact_id' => 22,
                'network_id' => 3,
                'identifyer' => 'insta-John-Cornyn',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            105 => 
            array (
                'contact_id' => 23,
                'network_id' => 3,
                'identifyer' => 'insta-Richard-Durbin',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            106 => 
            array (
                'contact_id' => 24,
                'network_id' => 3,
                'identifyer' => 'insta-Michael-Enzi',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            107 => 
            array (
                'contact_id' => 25,
                'network_id' => 3,
                'identifyer' => 'insta-Lindsey-Graham',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            108 => 
            array (
                'contact_id' => 26,
                'network_id' => 3,
                'identifyer' => 'insta-James-Inhofe',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            109 => 
            array (
                'contact_id' => 27,
                'network_id' => 3,
                'identifyer' => 'insta-Mitch-McConnell',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            110 => 
            array (
                'contact_id' => 28,
                'network_id' => 3,
                'identifyer' => 'insta-Jeff-Merkley',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            111 => 
            array (
                'contact_id' => 29,
                'network_id' => 3,
                'identifyer' => 'insta-John-Reed',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            ),
            112 => 
            array (
                'contact_id' => 30,
                'network_id' => 3,
                'identifyer' => 'insta-James-Risch',
                'deleted_at' => NULL,
                'created_at' => '2017-05-30 18:22:28',
                'updated_at' => '2017-05-30 18:22:28',
            )
        ));
        
        
    }
}