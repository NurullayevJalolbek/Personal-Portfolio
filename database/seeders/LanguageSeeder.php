<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')
            ->truncate();
            
        DB::table('languages')
            ->insert([
                [
                    'name' => 'O\'zbek tili',
                    'url' => 'uz',
                    'default' => true,
                    'status' => 'active',
                ],
                [
                    'name' => 'Ўзбек тили',
                    'url' => 'cyrl',
                    'default' => false,
                    'status' => 'active',
                ],
                [
                    'name' => 'Русский',
                    'url' => 'ru',
                    'default' => false,
                    'status' => 'active',
                ],
                [
                    'name' => 'English',
                    'url' => 'en',
                    'default' => false,
                    'status' => 'active',
                ],
            ]);

        $id = DB::table('languages')->orderBy('id', 'desc')->first()?->id;
        DB::statement('alter sequence languages_id_seq restart with ' . ($id + 1));
    }
}
