<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = base_path('database/datas/regions.json');

        $datas = file_exists($path)
            ? collect(json_decode(file_get_contents($path), true))
            : [];

        $table = 'references';

        foreach ($datas as $data) {
            $id = DB::table($table)->insertGetId([
                'name' => $data['name']['uz'],
                'code' => $data['soato'],
                'table_name' => 'regions',
                'status' => 'active'
            ]);

            DB::table('translations')->insert([
                [
                    'table_name' => $table,
                    'field_name' => 'name',
                    'field_id' => $id,
                    'field_value' => $data['name']['uz'],
                    'language_url' => 'uz',
                ],
                [
                    'table_name' => $table,
                    'field_name' => 'name',
                    'field_id' => $id,
                    'field_value' => latinToOzCyrill($data['name']['uz']),
                    'language_url' => 'cyrl',
                ],
                [
                    'table_name' => $table,
                    'field_name' => 'name',
                    'field_id' => $id,
                    'field_value' => $data['name']['ru'],
                    'language_url' => 'ru',
                ],
                [
                    'table_name' => $table,
                    'field_name' => 'name',
                    'field_id' => $id,
                    'field_value' => $data['name']['en'],
                    'language_url' => 'en',
                ],
            ]);
        }

        $id = DB::table($table)->orderBy('id', 'desc')->first()?->id;
        DB::statement('alter sequence ' . $table . '_id_seq restart with ' . ($id + 1));

        $tId = DB::table('translations')->orderBy('id', 'desc')->first()?->id;
        DB::statement('alter sequence translations_id_seq restart with ' . ($tId + 1));
    }
}
