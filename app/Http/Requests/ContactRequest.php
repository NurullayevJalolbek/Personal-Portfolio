<?php

namespace App\Http\Requests;

use App\Enums\ContactTypeEnum;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contacts' => ['required', 'array'],
            'contacts.*.name_' . config('app.fallback_locale') => ['required', 'string'],
            'contacts.*.type' => ['required', 'string', ContactTypeEnum::in()],
            'contacts.*.value' => ['required', 'string'],
        ];
    }
}
