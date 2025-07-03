<?php

namespace App\Http\Requests;

use App\Enums\General\ApplicationEntityEnum;
use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            // 'pinfl' => ['required', 'digits:14'],
            // 'fullname' => ['required', 'string'],
            'name' => ['prohibited_if:entity,physical', 'required_if:entity,legal', 'string'],
            'inn' => ['prohibited_if:entity,physical', 'required_if:entity,legal', 'string'],
            'entity' => ['required', 'string', ApplicationEntityEnum::in()],
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'file' => ['nullable', 'file', 'max:10240'],
            'phone' => ['required', new PhoneNumberRule],
            'processing' => ['required', 'boolean', 'in:1'],
        ];
    }

    public function attributes()
    {
        return [
            'title' => __('validation.attributes.application title'),
            'content' => __('validation.attributes.application content'),
            'name' => __('validation.attributes.Org name')
        ];
    }
}
