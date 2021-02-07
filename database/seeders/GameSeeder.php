<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var array $gameData */
        $gameData = [
            [
                'title' => 'Assassin\'s Creed Valhalla',
                'genre_id' => 18,
            ],
            [
                'title' => 'Cyberpunk 2077',
                'genre_id' => 9,
            ],
            [
                'title' => 'Spider-Man: Miles Moralis',
                'genre_id' => 18,
            ],
            [
                'title' => 'Forza Horizon 7',
                'genre_id' => 7,
            ],
            [
                'title' => 'Gears of War',
                'genre_id' => 3,
            ],

            [
                'title' => 'God of War',
                'genre_id' => 18,
            ],
            [
                'title' => 'Death Stranding',
                'genre_id' => 18,
            ],
            [
                'title' => 'FIFA 21',
                'genre_id' => 11,
            ],
        ];

        Schema::disableForeignKeyConstraints();

        foreach ($gameData as $data) {
            Game::create($data);
        }
    }
}
