<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->delete();

        \DB::table('clients')->insert([
            0 =>  [
                'name' => 'Fadel and Sons',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ],
            1 =>  [
                'name' => 'Hilll Group',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ],
            2 =>  [
                'name' => 'Waters-Roob',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ],
            3 =>  [
                'name' => 'Romaguera-Rolfson',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ],
            4 =>  [
                'name' => 'Mueller-Reichel',
                'deleted_at' => null,
                'created_at' => '2017-05-30 18:40:27',
                'updated_at' => '2017-05-30 18:40:27',
            ],
        ]);
    }
}
