<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Kreait\Firebase\Messaging\CloudMessage;

class FirebaseTokenRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string = null): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $messaging = app('firebase.messaging');

        try {
            $messaging->send(CloudMessage::withTarget('token', $value), true);
        } catch (\Throwable $th) {
            $fail(__('validation.in'));
        }
    }
}
