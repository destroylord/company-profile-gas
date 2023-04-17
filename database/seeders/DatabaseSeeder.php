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
            HeaderSeeder::class, ContentSeeder::class,
            FeatureSeeder::class, ShopCateorySeeder::class,
            CareerSeeder::class, UserSeeder::class
        ]);
    }
}
