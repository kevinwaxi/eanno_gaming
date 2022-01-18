<?php

namespace App\Models;

use App\Casts\TitleCast;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Station extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'console_id',
        'screen_id',
        'is_occupied',
        'station_name',
        'slug',
    ];

    protected $casts = [
        'station_name' => TitleCast::class,
        'is_occupied' => 'boolean'
    ];

    /**
     * Get the console that owns the Station
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function console(): HasOne
    {
        return $this->hasOne(Console::class);
    }

    /**
     * Get the screen that owns the Station
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function screen(): HasOne
    {
        return $this->hasOne(Screen::class);
    }
}
