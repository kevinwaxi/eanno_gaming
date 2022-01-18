<?php

namespace App\Http\Controllers;

use App\Http\Actions\Store\StoreInvitationAction;
use App\Http\Requests\Store\StoreInvitationRequest;

class InvitationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvitationRequest $request, StoreInvitationAction $action)
    {
        //
        $action->execute($request);

        return redirect()
            ->route('requestInvitation')
            ->with('success', 'Invitation to register successfully requested. Please wait for registration link.');
    }
}
