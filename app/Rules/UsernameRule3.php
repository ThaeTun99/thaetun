<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class UsernameRule3 implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // if (!preg_match('/[a-z]/', $value)) {
        if (!substr($value, 2, -4)) {
            Log::channel("customlog")
                ->error("Username fails rule-3.");

            Log::channel("signlog")
                ->error("Username fails rule-3.");

            $fail('The :attribute must have at least one lowercase letter.');
        } else {

            Log::channel("customlog")
                ->info("Login username success rule-3.");

            Log::channel("signlog")
                ->info("Signup username success rule-3.");
        }
    }
    // public function __construct()
    // {
    // }

    // public function passes($attribute, $value)
    // {
    //     return substr($value, 2, -4);
    //     // return preg_match('/[a-z]/', $value);
    // }

    // public function message()
    // {
    //     return "The validation error message.";
    // }
}
