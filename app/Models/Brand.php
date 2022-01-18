<?php

namespace App\Models;

use App\Casts\TitleCast;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'color',
    ];

    protected $casts = [
        'name' => TitleCast::class
    ];

    /**
     * Get all of the screens for the Brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function screens(): HasMany
    {
        return $this->hasMany(Screen::class);
    }
}
