<?php

use Illuminate\Database\Seeder;

class ContactLineupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_lineup')->delete();
        
        \DB::table('contact_lineup')->insert(array (
            0 => 
            array (
                'contact_id' => 22,
                'lineup_id' => 4,
            ),
            1 => 
            array (
                'contact_id' => 12,
                'lineup_id' => 4,
            ),
            2 => 
            array (
                'contact_id' => 30,
                'lineup_id' => 4,
            ),
            3 => 
            array (
                'contact_id' => 20,
                'lineup_id' => 4,
            ),
            4 => 
            array (
                'contact_id' => 13,
                'lineup_id' => 4,
            ),
            5 => 
            array (
                'contact_id' => 3,
                'lineup_id' => 4,
            ),
            6 => 
            array (
                'contact_id' => 16,
                'lineup_id' => 4,
            ),
            7 => 
            array (
                'contact_id' => 9,
                'lineup_id' => 4,
            ),
            8 => 
            array (
                'contact_id' => 28,
                'lineup_id' => 4,
            ),
            9 => 
            array (
                'contact_id' => 6,
                'lineup_id' => 4,
            ),
            10 => 
            array (
                'contact_id' => 9,
                'lineup_id' => 5,
            ),
            11 => 
            array (
                'contact_id' => 25,
                'lineup_id' => 5,
            ),
            12 => 
            array (
                'contact_id' => 7,
                'lineup_id' => 5,
            ),
            13 => 
            array (
                'contact_id' => 30,
                'lineup_id' => 6,
            ),
            14 => 
            array (
                'contact_id' => 17,
                'lineup_id' => 6,
            ),
            15 => 
            array (
                'contact_id' => 14,
                'lineup_id' => 6,
            ),
            16 => 
            array (
                'contact_id' => 27,
                'lineup_id' => 6,
            ),
            17 => 
            array (
                'contact_id' => 4,
                'lineup_id' => 6,
            ),
            18 => 
            array (
                'contact_id' => 28,
                'lineup_id' => 6,
            ),
            19 => 
            array (
                'contact_id' => 18,
                'lineup_id' => 6,
            ),
            20 => 
            array (
                'contact_id' => 25,
                'lineup_id' => 6,
            ),
            21 => 
            array (
                'contact_id' => 21,
                'lineup_id' => 6,
            ),
            22 => 
            array (
                'contact_id' => 5,
                'lineup_id' => 6,
            ),
            23 => 
            array (
                'contact_id' => 29,
                'lineup_id' => 6,
            ),
            24 => 
            array (
                'contact_id' => 8,
                'lineup_id' => 6,
            ),
            25 => 
            array (
                'contact_id' => 20,
                'lineup_id' => 6,
            ),
            26 => 
            array (
                'contact_id' => 24,
                'lineup_id' => 6,
            ),
            27 => 
            array (
                'contact_id' => 2,
                'lineup_id' => 6,
            ),
            28 => 
            array (
                'contact_id' => 23,
                'lineup_id' => 6,
            ),
            29 => 
            array (
                'contact_id' => 13,
                'lineup_id' => 6,
            ),
            30 => 
            array (
                'contact_id' => 6,
                'lineup_id' => 6,
            ),
            31 => 
            array (
                'contact_id' => 26,
                'lineup_id' => 6,
            ),
            32 => 
            array (
                'contact_id' => 22,
                'lineup_id' => 6,
            ),
        ));
        
        
    }
}