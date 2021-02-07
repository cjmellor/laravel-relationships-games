<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    /**
     * Relationship: one-to-many.
     *
     * A genre belongs to a game
     *
     * @return HasMany
     */
    public function game(): HasMany
    {
        return $this->hasMany(Game::class);
    }
}
