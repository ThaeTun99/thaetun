<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class UsernameRule2 implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!ctype_upper(substr($value, 0, 2))) {

            Log::channel("customlog")
            ->error("Username fails rule-2.");

            Log::channel("signlog")
            ->error("Username fails rule-2.");

            $fail('The :attribute of first 2 letter must be Uppercase.');
        } else {
            Log::channel("customlog")
                ->info("Login username success rule-2.");

                Log::channel("signlog")
                ->info("Signup username success rule-2.");
        }
    }

    // public function __construct()
    // {
    // }

    // public function passes($attribute, $value)
    // {
    //     return ctype_upper(substr($value, 0, 2));
    // }

    // public function message()
    // {
    //     return "The validation error message.";
    // }
}
