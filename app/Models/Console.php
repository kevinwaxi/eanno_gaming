<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Console extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'serial_number',
        'storage_type',
        'storage_size',
        'purchase_date',
        'health_id',
        'type_id',
    ];

    protected $casts = [
        'purchase' => 'datetime'
    ];

    /**
     * Get the type that owns the Console
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * Get the station that owns the Console
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class);
    }
}
