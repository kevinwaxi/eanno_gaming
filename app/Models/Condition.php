<?php

namespace App\Models;

use App\Casts\TitleCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Condition extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'color'
    ];

    protected $casts = [
        'name' => TitleCast::class
    ];

    /**
     * The consoles that belong to the Condition
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function consoles(): BelongsToMany
    {
        return $this->belongsToMany(Console::class, 'condition_consoles', 'console_id', 'condition')
            ->withTimestamps()
            ->withPivot('notes');
    }

    /**
     * The screens that belong to the Condition
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function screens(): BelongsToMany
    {
        return $this->belongsToMany(Screen::class, 'condition_screens', 'condition_id', 'screen_id')
            ->withTimestamps()
            ->withPivot('notes');
    }
}
