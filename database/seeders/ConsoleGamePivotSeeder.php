<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ConsoleGamePivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('console_game')->insert([
            ['game_id' => 1, 'console_id' => 1],
            ['game_id' => 1, 'console_id' => 2],
            ['game_id' => 1, 'console_id' => 3],
            ['game_id' => 2, 'console_id' => 1],
            ['game_id' => 2, 'console_id' => 2],
            ['game_id' => 3, 'console_id' => 2],
            ['game_id' => 3, 'console_id' => 3],
            ['game_id' => 4, 'console_id' => 1],
            ['game_id' => 5, 'console_id' => 3],
            ['game_id' => 6, 'console_id' => 1],
            ['game_id' => 6, 'console_id' => 2],
            ['game_id' => 7, 'console_id' => 2],
            ['game_id' => 7, 'console_id' => 3],
            ['game_id' => 8, 'console_id' => 1],
            ['game_id' => 8, 'console_id' => 2],
            ['game_id' => 8, 'console_id' => 3],
        ]);
    }
}
