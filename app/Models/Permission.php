<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use HasFactory;

    public function scopeSearch($term, $query)
    {
        # code...
        $term = "%$term%";

        $query->where(function ($query) use ($term) {
            $query->where('name', 'like', $term)
                ->orWhereHas('roles', function ($query) use ($term) {
                    $query->where('name', 'like', $term);
                });
        });
    }
}
