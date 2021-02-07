<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ConsoleSeeder::class,
            ConsoleGamePivotSeeder::class,
            GameSeeder::class,
            GameStorePivotSeeder::class,
            GenreSeeder::class,
            StoreSeeder::class,
        ]);
    }
}
