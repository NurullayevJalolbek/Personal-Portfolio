<?php

namespace App\Http\Requests\User;

use App\Enums\General\StatusStringEnum;
use App\Enums\RoleGroupEnum;
use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => ['required', 'array'],
            'name.' . config('app.fallback_locale') => ['required', 'string'],
            'code' => ['required', 'string', 'unique:roles,code' . routeParam(parameter: 'role')],
            'group' => ['required', 'string', RoleGroupEnum::in()],
            'status' => ['required', 'string', StatusStringEnum::in()]
        ];
    }
}
