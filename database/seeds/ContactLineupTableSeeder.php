<?php

use Illuminate\Database\Seeder;

class ContactLineupTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contact_lineup')->delete();

        \DB::table('contact_lineup')->insert([
            0 =>  [
                'contact_id' => 22,
                'lineup_id' => 4,
            ],
            1 =>  [
                'contact_id' => 12,
                'lineup_id' => 4,
            ],
            2 =>  [
                'contact_id' => 30,
                'lineup_id' => 4,
            ],
            3 =>  [
                'contact_id' => 20,
                'lineup_id' => 4,
            ],
            4 =>  [
                'contact_id' => 13,
                'lineup_id' => 4,
            ],
            5 =>  [
                'contact_id' => 3,
                'lineup_id' => 4,
            ],
            6 =>  [
                'contact_id' => 16,
                'lineup_id' => 4,
            ],
            7 =>  [
                'contact_id' => 9,
                'lineup_id' => 4,
            ],
            8 =>  [
                'contact_id' => 28,
                'lineup_id' => 4,
            ],
            9 =>  [
                'contact_id' => 6,
                'lineup_id' => 4,
            ],
            10 =>  [
                'contact_id' => 9,
                'lineup_id' => 5,
            ],
            11 =>  [
                'contact_id' => 25,
                'lineup_id' => 5,
            ],
            12 =>  [
                'contact_id' => 7,
                'lineup_id' => 5,
            ],
            13 =>  [
                'contact_id' => 30,
                'lineup_id' => 6,
            ],
            14 =>  [
                'contact_id' => 17,
                'lineup_id' => 6,
            ],
            15 =>  [
                'contact_id' => 14,
                'lineup_id' => 6,
            ],
            16 =>  [
                'contact_id' => 27,
                'lineup_id' => 6,
            ],
            17 =>  [
                'contact_id' => 4,
                'lineup_id' => 6,
            ],
            18 =>  [
                'contact_id' => 28,
                'lineup_id' => 6,
            ],
            19 =>  [
                'contact_id' => 18,
                'lineup_id' => 6,
            ],
            20 =>  [
                'contact_id' => 25,
                'lineup_id' => 6,
            ],
            21 =>  [
                'contact_id' => 21,
                'lineup_id' => 6,
            ],
            22 =>  [
                'contact_id' => 5,
                'lineup_id' => 6,
            ],
            23 =>  [
                'contact_id' => 29,
                'lineup_id' => 6,
            ],
            24 =>  [
                'contact_id' => 8,
                'lineup_id' => 6,
            ],
            25 =>  [
                'contact_id' => 20,
                'lineup_id' => 6,
            ],
            26 =>  [
                'contact_id' => 24,
                'lineup_id' => 6,
            ],
            27 =>  [
                'contact_id' => 2,
                'lineup_id' => 6,
            ],
            28 =>  [
                'contact_id' => 23,
                'lineup_id' => 6,
            ],
            29 =>  [
                'contact_id' => 13,
                'lineup_id' => 6,
            ],
            30 =>  [
                'contact_id' => 6,
                'lineup_id' => 6,
            ],
            31 =>  [
                'contact_id' => 26,
                'lineup_id' => 6,
            ],
            32 =>  [
                'contact_id' => 22,
                'lineup_id' => 6,
            ],
        ]);
    }
}
