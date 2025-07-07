<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('about')->delete();

        \DB::table('about')->insert(array (
            array (
                'id'            => 1,
                'name'          => "Frontend.uz",
                'logo'          => "",
                'phone'         => "+998933396345",
                'telegram'      => "https://t.me/mrbakhtishod",
                'instagram'     => "https://www.instagram.com/mrbakhtishod",
                'facebook'      => "",
                'youtube'       => "",
                'twitter'       => "",
            ),
        ));

        $lastId = \DB::table('about')->orderBy('id', 'desc')->first();
    }
}
