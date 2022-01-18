<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'color',
        'notes'
    ];

    /**
     * Get all of the console for the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function console(): HasMany
    {
        return $this->hasMany(Console::class);
    }
}
