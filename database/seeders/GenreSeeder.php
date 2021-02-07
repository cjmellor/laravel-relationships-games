<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * A list of genres and slugs
     * Generated from IGDB API.
     * @TODO Look into maybe using the API to generate this data dynamically
     * @var array
     */
    private array $genreData = [
        ['name' => 'Point-and-click', 'slug' => 'point-and-click'],
        ['name' => 'Fighting', 'slug' => 'fighting'],
        ['name' => 'Shooter', 'slug' => 'shooter'],
        ['name' => 'Music', 'slug' => 'music'],
        ['name' => 'Platform', 'slug' => 'platform'],
        ['name' => 'Puzzle', 'slug' => 'puzzle'],
        ['name' => 'Racing', 'slug' => 'racing'],
        ['name' => 'Real Time Strategy (RTS)', 'slug' => 'real-time-strategy-rts'],
        ['name' => 'Role-playing (RPG)', 'slug' => 'role-playing-rpg'],
        ['name' => 'Simulator', 'slug' => 'simulator'],
        ['name' => 'Sport', 'slug' => 'sport'],
        ['name' => 'Strategy', 'slug' => 'strategy'],
        ['name' => 'Turn-based strategy (TBS)', 'slug' => 'turn-based-strategy-tbs'],
        ['name' => 'Tactical', 'slug' => 'tactical'],
        ['name' => "Hack and slash/Beat 'em up", 'slug' => 'hack-and-slash-beat-em-up'],
        ['name' => 'Quiz/Trivia', 'slug' => 'quiz-trivia'],
        ['name' => 'Pinball', 'slug' => 'pinball'],
        ['name' => 'Adventure', 'slug' => 'adventure'],
        ['name' => 'Indie', 'slug' => 'indie'],
        ['name' => 'Arcade', 'slug' => 'arcade'],
        ['name' => 'Visual Novel', 'slug' => 'visual-novel'],
        ['name' => 'Card & Board Game', 'slug' => 'card-and-board-game'],
        ['name' => 'MOBA', 'slug' => 'moba'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->genreData as $data) {
            Genre::create($data);
        }
    }
}
