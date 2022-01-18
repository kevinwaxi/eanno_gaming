<?php

namespace App\Http\Actions\Store;

use App\Models\Invitation;
use Illuminate\Http\Request;

class StoreInvitationAction
{
    public function execute(Request $request)
    {
        # code...
        $invitation = new Invitation($request->all());
        $invitation->generateInvitationToken();

        $invitation->save();
    }
}
