<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class PasswordRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (strpbrk($value, '#!*+')) {

        Log::channel("customlog")
        ->error("Login password fails rule-1.");

        Log::channel("signlog")
        ->error("Signup password fails rule-1.");

            $fail("The :attribute must not include '#', '!', '*', or '+'");
        }else{
            Log::channel("customlog")
        ->info("Login password success rule-1.");

        Log::channel("signlog")
        ->info("Singup password success rule-1.");
        }
    }
    // public function __construct(){

    // }

    // public function passes($attribute,$value){
    //     return !strpbrk($value, '#!*+');
    // }

    // public function message(){

    //     // Log::channel("passwordlog")
    //     // ->error("Password is wrong-1");
    //     return "The validation error message.";
    // }

}
