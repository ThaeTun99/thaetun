<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class AgeRule2 implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(strlen($value)!==2){

        Log::channel("signlog")
        ->error("Signup user age fails rule-2.");

            $fail("The :attribute must be 2 digits.");
        }else{

        Log::channel("signlog")
        ->info("Signup user age success rule-2..");

        }
    }

    // public function __construct(){

    // }

    // public function passes($attribute,$value){

    //     return strlen($value)==2;
    // }
}
