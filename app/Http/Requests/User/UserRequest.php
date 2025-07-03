<?php

namespace App\Http\Requests\User;

use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'      => ['required', 'string', 'unique:users,username' ],
            'name'          => ['required', 'string'],
            'surname'       => ['required', 'string'],
            'patronymic'    => ['nullable', 'string'],
            'pinfl'         => ['nullable', 'digits:14', 'unique:users,pinfl'],
            'password'      => ['string', 'confirmed'],
            'phone'         => ['required', 'string', new PhoneNumberRule()],
            'role_id'       => ['required', 'integer', 'exists:roles,id']
        ];
    }
}
