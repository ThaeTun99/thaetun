<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class AgeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        If(!is_numeric($value)){

        Log::channel("signlog")
        ->error("Signup user age fails rule-1.");

            $fail("The :attribute must be only number.");
        }else{

        Log::channel("signlog")
        ->info("Singup user age success rule-1.");
        }
    }

    // public function __construct(){

    // }

    // public function passes($attribute,$value){

    //     return is_numeric($value);
    // }
}
