<?php

namespace App\Http\Requests\Student;

use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name'                  => ['required', 'string'],
            'surname'               => ['required', 'string'],
            'patronymic_name'       => ['nullable', 'string'],
            'email'                 => ['required', 'email'],
            'phone'                 => ['required', 'string', new PhoneNumberRule()],

            'country_id'            => ['nullable', 'integer', 'exists:countries,id'],
            'program_id'            => ['nullable', 'integer', 'exists:programs,id'],

            "image"                 => ['nullable', 'file'],
            "language_certificate"  => ['nullable', 'file'],
            "red_passport"          => ['nullable', 'file'],
            "green_pasport"         => ['nullable', 'file'],
            "attestst"              => ['nullable', 'file'],
            "diplom"                => ['nullable', 'file'],
            "parents_pasport"       => ['nullable', 'file'],
            "motivation_letter"     => ['nullable', 'file'],
            "recamadition_letter"   => ['nullable', 'file'],
            "parents_salary"        => ['nullable', 'file'],
            "apostil"               => ['nullable', 'file'],
            "dov"                   => ['nullable', 'file'],
            "insurance"             => ['nullable', 'file'],
            "bank_account"          => ['nullable', 'file'],
            "visa"                  => ['nullable', 'file'],
        ];
    }
}
