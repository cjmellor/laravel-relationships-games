<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    /**
     * Relationship: many-to-many.
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
     * Relationship: one-to-many.
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
     * Relationship: many-to-many.
     *
     * A game has many consoles
     *
     * @return BelongsToMany
     */
    public function consoles(): BelongsToMany
    {
        return $this->belongsToMany(Console::class);
    }
}
