<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            [
                'name' => 'GameStop',
                'location' => 'Chicago'
            ],
            [
                'name' => 'GAME',
                'location' => 'Leeds'
            ],
            [
                'name' => 'Gamestation',
                'location' => 'Manchester'
            ],
            [
                'name' => 'Blockbuster',
                'location' => 'New York'
            ],
            [
                'name' => 'Video 37',
                'location' => 'Cardiff'
            ],
        ]);
    }
}
