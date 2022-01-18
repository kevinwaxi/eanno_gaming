<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvitationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'unique:users,email', 'unique:invitations,email'],
            'phone' => ['required', 'unique:users,phone', 'unique:invitations,phone']
        ];
    }

    public function messages()
    {
        # code...
        return [
            'email.unique' => 'Invitation with this email address already requested.',
            'phone.unique' => 'Invitation with this phone number already requested.'
        ];
    }
}
