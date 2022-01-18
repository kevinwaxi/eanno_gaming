<?php

namespace App\Models;

use App\Casts\TitleCast;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Screen extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'serial_number',
        'model_name',
        'size',
        'purchase_date',
        'brand_id'
    ];

    protected $casts = [
        'model_name' => TitleCast::class,
        'purchase_date' => 'datetime'
    ];

    /**
     * Get the brand that owns the Screen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * The screens that belong to the Screen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function screens(): BelongsToMany
    {
        return $this->belongsToMany(Condition::class, 'condition_screens', 'condition_id', 'screen_id')
            ->withTimestamps()
            ->withPivot('notes');
    }

    /**
     * Get the station that owns the Screen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class);
    }
}
