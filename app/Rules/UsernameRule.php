<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class UsernameRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!is_numeric(substr($value, -4))) {

            Log::channel("customlog")
        ->error("Username fails rule-1.");

        Log::channel("signlog")
        ->error("Username fails rule-2");

            $fail('The :attribute must end with 4 digits.');
        }else{

            Log::channel("customlog")
        ->info("Login username success rule-1.");

        Log::channel("signlog")
        ->info("Signup username success rule-1.");

        }
    }
    // public function __construct(){

    // }

    // public function passes($attribute,$value){

    //     return is_numeric(substr($value, -4));
    // }

    // public function message(){
    //     return "The validation error message.";
    // }
}

