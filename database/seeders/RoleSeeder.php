<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = base_path('database/datas/roles.json');

        $datas = file_exists($path)
            ? collect(json_decode(file_get_contents($path), true))
            : [];

        $table = 'roles';

        foreach ($datas as $data) {
            $id = DB::table($table)->insertGetId([
                'name' => $data['name']['uz'],
                'code' => $data['code'],
                'group' => $data['group'],
                'status' => 'active'
            ]);

            DB::table('translations')->insert([
                [
                    'table_name'    => $table,
                    'field_name'    => 'name',
                    'field_id'      => $id,
                    'field_value'   => $data['name']['uz'],
                    'language_url'  => 'uz',
                ],
                [
                    'table_name'    => $table,
                    'field_name'    => 'name',
                    'field_id'      => $id,
                    'field_value'   => latinToOzCyrill($data['name']['uz']),
                    'language_url'  => 'cyrl',
                ],
                [
                    'table_name'    => $table,
                    'field_name'    => 'name',
                    'field_id'      => $id,
                    'field_value'   => $data['name']['ru'],
                    'language_url'  => 'ru',
                ],
                [
                    'table_name'    => $table,
                    'field_name'    => 'name',
                    'field_id'      => $id,
                    'field_value'   => $data['name']['en'],
                    'language_url'  => 'en',
                ],
            ]);
        }

        // MySQL uchun AUTO_INCREMENT qiymatini yangilash
        $id = DB::table($table)->orderBy('id', 'desc')->first()?->id ?? 0;
        DB::statement("ALTER TABLE {$table} AUTO_INCREMENT = " . ($id + 1));

        $tId = DB::table('translations')->orderBy('id', 'desc')->first()?->id ?? 0;
        DB::statement("ALTER TABLE translations AUTO_INCREMENT = " . ($tId + 1));
    }
}
