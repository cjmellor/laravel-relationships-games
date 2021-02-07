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
                'platform' => 'Xbox Series X',
            ],
            [
                'title' => 'Cyberpunk 2077',
                'genre_id' => 9,
                'platform' => 'PlayStation 5',
            ],
            [
                'title' => 'Spider-Man: Miles Moralis',
                'genre_id' => 18,
                'platform' => 'PlayStation 5',
            ],
            [
                'title' => 'Forza Horizon 7',
                'genre_id' => 7,
                'platform' => 'Xbox Series X',
            ],
            [
                'title' => 'Gears of War',
                'genre_id' => 3,
                'platform' => 'Xbox Series X',
            ],

            [
                'title' => 'God of War',
                'genre_id' => 18,
                'platform' => 'PlayStation 5',
            ],
            [
                'title' => 'Death Stranding',
                'genre_id' => 18,
                'platform' => 'PlayStation 5',
            ],
            [
                'title' => 'FIFA 21',
                'genre_id' => 11,
                'platform' => 'Xbox Series X',
            ],
        ];

        Schema::disableForeignKeyConstraints();

        foreach ($gameData as $data) {
            Game::create($data);
        }
    }
}
