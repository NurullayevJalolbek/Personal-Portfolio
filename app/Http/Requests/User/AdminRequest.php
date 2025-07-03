<?php

namespace App\Http\Requests\User;

use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AdminRequest extends FormRequest
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
        $param = routeParam(parameter: 'admin');
        $optional = $param ? 'nullable' : 'required';
        return [
            'username'      => ['required', 'string', 'unique:users,username' . $param],
            'name'          => ['required', 'string'],
            'surname'       => ['required', 'string'],
            'patronymic'    => ['nullable', 'string'],
            'pinfl'         => ['nullable', 'digits:14', 'unique:users,pinfl' . $param],
            'password' => [
                $optional,
                'string',
                Password::min(8)
                    ->mixedCase(),
                    // ->numbers()
                    // ->symbols()
                    // ->uncompromised(),
                'confirmed'
            ],
            'phone'         => ['required', 'string', new PhoneNumberRule],
            'role_id'       => ['required', 'integer', 'exists:roles,id']
        ];
    }

    public function attributes()
    {
        return [
            'name' => __('locale.Firstname')
        ];
    }
}
