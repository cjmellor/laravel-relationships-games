<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    /**
     * Relationship: many-to-many
     *
     * A game belongs to many stores
     *
     * @return BelongsToMany
     */
    public function stores(): BelongsToMany
    {
        return $this->belongsToMany(Store::class);
    }

    /**
     * Relationship: one-to-many
     *
     * A game has one genre
     *
     * @return BelongsTo
     */
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    /**
     * List of consoles available
     * @TODO Remove this in favor of a relationship model
     *
     * @return array
     */
    public function consoleList(): array
    {
        return [
            'Xbox Series X',
            'PlayStation 5',
        ];
    }
}
