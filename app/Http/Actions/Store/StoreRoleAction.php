<?php

namespace App\Http\Actions\Store;

use App\Models\Role;
use Illuminate\Http\Request;

class StoreRoleAction
{
    public function execute(Request $request)
    {
        # code...
        Role::create([
            'name' => $request->name
        ]);
    }
}
