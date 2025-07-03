<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumberRule implements ValidationRule
{
    protected $required = true;

    public function __construct($required = true)
    {
        $this->required = $required;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string = null): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($this->required && (is_null($value) || preg_match('/^\+998$/u', $value))) {
            $fail(__('validation.required'));
        }

        if (!preg_match('/\+998\s\d{2}\s\d{3}\s\d{2}\s\d{2}/', $value)) {
            $fail(__('validation.regex'));
        }
    }
}
