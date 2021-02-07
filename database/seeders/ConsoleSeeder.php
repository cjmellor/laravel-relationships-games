<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consoles = [
            'Xbox Series X',
            'PlayStation 5',
            'Nintendo Switch',
        ];

        foreach ($consoles as $console) {
            Console::create([
                'name' => $console,
            ]);
        }
    }
}
