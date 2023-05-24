<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class AgeRule3 implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(($value) < 20){

        Log::channel("signlog")
        ->error("Singup user age fails rule-3.");

            $fail("The :attribute must be greater than 20 years old.");
        }else{

        Log::channel("signlog")
        ->info("Signup user age success rule-3.");
        }
    }
    // public function __construct(){

    // }

    // public function passes($attribute,$value){

    //     return ($value) >= 20;
    // }
}
