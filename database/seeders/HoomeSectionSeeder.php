<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoomeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_sections')->truncate();

        DB::table('home_sections')->insert([
            'fullname_title' => 'Nurullayev Jalolbek',
            'icon' => 'https://cdn-icons-png.flaticon.com/512/201/201623.png',
            'description' => 'Men — PHP va Laravel dasturlash tillarida ishlovchi junior backend dasturchiman. Kodga muhabbat, yangilikka qiziqish va har doim o‘sishga intilish mening ustuvor yo‘nalishimdir.',
            'background_image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80',
            'subtitle' => 'Laravel backend bilan boshlanib, katta tizimlar tomon yo‘l',
        ]);
    }
}
