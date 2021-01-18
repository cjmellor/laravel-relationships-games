<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Store extends Model
{
    use HasFactory;

    protected array $fillable = ['name', 'location'];

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }
}
