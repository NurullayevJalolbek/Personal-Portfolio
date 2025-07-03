<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PermissionRequest extends FormRequest
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
            'name.' . config('app.fallback_locale') => ['required', 'array'],
            'method' => ['required', 'string'],
            'uri' => ['required', 'string', Rule::unique('permissions')
                ->where(function ($query) {
                    $id  = routeParam('', 'permission');
                    $query->where('method', $this->request->get('method'))
                        ->when($id, function ($query) use ($id) {
                            $query->whereNot('id', $id);
                        })
                        ->where('uri', $this->request->get('uri'));
                })],
            'default' => ['required', 'boolean'],
        ];
    }
}
