<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_sections')->truncate();

        DB::table('about_sections')->insert([
            'image' => 'DSC06928.jpg',
            'title' => 'Nurullayev Jalolbek',
            'description' => 'Men — PHP/Laravel backend dasturchiman. Bu bo‘limda mening tajribam, malakam va texnologiyalar bilan ishlash tajribam haqida to‘liq ma’lumot topasiz.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
