<?php

namespace App\Http\Requests\User;

use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['nullable', 'image'],
            'phone' => ['prohibited', new PhoneNumberRule, 'unique:users,phone,' . Auth::id()],
            'password' => ['string', Password::min(8)
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised(), 'confirmed'],
        ];
    }
}
