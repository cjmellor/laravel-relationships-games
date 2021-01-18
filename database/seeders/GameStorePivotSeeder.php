<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameStorePivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_store')->insert([
            ['store_id' => 1, 'game_id' => 2],
            ['store_id' => 1, 'game_id' => 4],
            ['store_id' => 2, 'game_id' => 3],
            ['store_id' => 2, 'game_id' => 6],
            ['store_id' => 2, 'game_id' => 7],
            ['store_id' => 3, 'game_id' => 1],
            ['store_id' => 3, 'game_id' => 2],
            ['store_id' => 3, 'game_id' => 4],
            ['store_id' => 3, 'game_id' => 7],
            ['store_id' => 4, 'game_id' => 1],
            ['store_id' => 4, 'game_id' => 2],
            ['store_id' => 4, 'game_id' => 6],
            ['store_id' => 5, 'game_id' => 1],
            ['store_id' => 5, 'game_id' => 2],
            ['store_id' => 5, 'game_id' => 3],
            ['store_id' => 5, 'game_id' => 4],
            ['store_id' => 5, 'game_id' => 5],
            ['store_id' => 5, 'game_id' => 6],
            ['store_id' => 5, 'game_id' => 7],
        ]);
    }
}
