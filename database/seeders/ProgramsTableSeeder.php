<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('programs')->delete();

        \DB::table('programs')->insert(array (
            array (
                'id' => 1,
                'name' => "Master",
            ),
            array (
                'id' => 2,
                'name' => "Bachelor",
            ),
            array (
                'id' => 3,
                'name' => "Language course",
            ),
            array (
                'id' => 4,
                'name' => "Foundation",
            ),
            array (
                'id' => 5,
                'name' => "PhD",
            ),
            array (
                'id' => 6,
                'name' => "Working Travel",
            ),
        ));

        $lastId = \DB::table('programs')->orderBy('id', 'desc')->first();
    }
}
