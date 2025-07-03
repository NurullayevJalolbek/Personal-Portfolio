<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->delete();

        \DB::table('countries')->insert(array (
            array (
                'id' => 1,
                'name' => "South Korea",
            ),
            array (
                'id' => 2,
                'name' => "China",
            ),
            array (
                'id' => 3,
                'name' => "Italy",
            ),
            array (
                'id' => 4,
                'name' => "Germany",
            ),
            array (
                'id' => 5,
                'name' => "Latvia",
            ),
            array (
                'id' => 6,
                'name' => "Poland",
            ),
            array (
                'id' => 7,
                'name' => "United Kingdom",
            ),
            array (
                'id' => 8,
                'name' => "Malaysia",
            ),
            array (
                'id' => 9,
                'name' => "Singapore",
            ),
            array (
                'id' => 10,
                'name' => "Canada",
            ),
            array (
                'id' => 11,
                'name' => "United States",
            ),
            array (
                'id' => 12,
                'name' => "Turkey",
            ),
            array (
                'id' => 13,
                'name' => "Russia",
            ),
        ));

        $lastId = \DB::table('countries')->orderBy('id', 'desc')->first();
        \DB::statement('alter sequence countries_id_seq restart with ' . (intval($lastId->id) + 1));
    }
}
