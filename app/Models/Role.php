<?php

namespace App\Models;

use App\Casts\TitleCast;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role as ModelsRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends ModelsRole
{
    use HasFactory;

    protected $casts = [
        'name' => TitleCast::class
    ];

    public function scopeSearch($term, $query)
    {
        # code...
        # code...
        $term = "%$term%";

        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term)
                ->orWhereHas('permissions', function ($query) use ($term) {
                    $query->where('name', 'like', $term);
                });
        });
    }
}
