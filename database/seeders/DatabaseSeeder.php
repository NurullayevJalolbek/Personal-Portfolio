<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AboutSeeder::class,
            LanguageSeeder::class,
            RoleSeeder::class,
            RegionSeeder::class,

            CountriesTableSeeder::class,
            ProgramsTableSeeder::class,
            
            UserSeeder::class,
        ]);
        $this->call(PostsTableSeeder::class);
    }
}
