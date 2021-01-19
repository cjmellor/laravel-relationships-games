<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected array $fillable = ['title', 'genre', 'platform'];

    public function stores(): BelongsToMany
    {
        return $this->belongsToMany(Store::class);
    }

    /**
     * List of consoles available
     * @TODO Remove this in favor of a relationship model
     *
     * @return string[]
     */
    public function consoleList(): array
    {
        return [
            'Xbox Series X',
            'PlayStation 5',
        ];
    }
}
