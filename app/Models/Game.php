<?php

namespace App\Models;

use App\Casts\TitleCast;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'release_date',
        'is_available',
    ];

    protected $casts = [
        'name' => TitleCast::class,
        'is_available' => 'boolean',
        'release_date' => 'datetime'
    ];
}
