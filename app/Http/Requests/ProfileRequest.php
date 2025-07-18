<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneNumberRule;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'          => ['required', 'string'],
            'surname'       => ['required', 'string'],
            'patronymic'    => ['nullable', 'string'],
            'phone'         => ['required', 'string', new PhoneNumberRule],
            'image'         => ['nullable', 'image'],
            'password'      => ['nullable', 'min:5', 'confirmed'],
        ];
    }
}
